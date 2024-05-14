// ============ Show Active Links JS ============ //
const navLinks = document.querySelectorAll("#navbarVerticalMenu .nav-link");
const currentPath = window.location.pathname;

navLinks.forEach((link) => {
  if (currentPath === link.getAttribute("href")) {
    link.classList.add("active");

    // Find and open all ancestor 'nav-collapse' elements
    let currentCollapse = link.closest(".nav-collapse");

    while (currentCollapse) {
      currentCollapse.classList.add("show");

      // If it's a dropdown, mark the toggle as active
      const dropdownToggle = currentCollapse.previousElementSibling;
      if (dropdownToggle.classList.contains("dropdown-toggle")) {
        // Move up to the next parent collapse
        currentCollapse = currentCollapse.parentNode.closest(".nav-collapse");
        if (currentCollapse) {
          dropdownToggle.classList.remove("active");
        } else {
          dropdownToggle.classList.add("active");
        }
      }
    }
  }
});
// ============ End Show Active Links JS ============ //

// Remove invalid validations onFocus
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll("input").forEach((input) => {
    input.addEventListener("keydown", () => {
      input.classList.remove("is-invalid");
    });
  });
});

// ============ Display and Validate User JS ============ //
$(document).ready(function () {
  const defaultImageSrc = $("#imgPreview").attr("src"); // Store default src

  $("#avatarUploader").change(function () {
    if (this.files && this.files[0]) {
      const reader = new FileReader();
      reader.onload = function (e) {
        $("#imgPreview").attr("src", e.target.result);
      };
      reader.readAsDataURL(this.files[0]);
    }
  });

  $("#btnRemoveImg").click(function () {
    $("#imgPreview").attr("src", defaultImageSrc); // Restore default image
    $("#avatarUploader").val(""); // Clear the file input
  });
});

function displayUserDetails() {
  // Get the values from the input fields
  const fname = $("#txtFname").val();
  const mname = $("#txtMname").val();
  const lname = $("#txtLname").val();
  const role = $("#selRole").find("option:selected").text();
  const dept = $("#selDept").find("option:selected").text();
  const email = $("#txtEmail").val();
  const phone = $("#txtPhone").val();
  const user = $("#txtUsername").val();
  const pass = $("#txtPassword").val();

  // Update the 'dd' elements with corresponding values
  $("#ddFullname").text(fname + " " + mname + " " + lname);
  $("#ddRole").text(role);
  $("#ddDept").text(dept);
  $("#ddEmail").text(email);
  $("#ddPhone").text(phone);
  $("#ddUsername").text(user);
  $("#ddPassword").text(pass); // Consider how to handle the password
}

const targetDiv = document.getElementById("addUserStepConfirmation");
if (targetDiv) {
  // Check if the targetDiv element exists
  const observer = new MutationObserver((mutations) => {
    mutations.forEach((mutation) => {
      if (mutation.type === "attributes" && mutation.attributeName === "class") {
        const classList = mutation.target.classList;
        if (classList.contains("active")) {
          displayUserDetails();
        }
      }
    });
  });
  observer.observe(targetDiv, { attributes: true });
}
// ============ End Display and Validate User JS ============ //

// ============ Edit and Delete User JS ============ //
$(document).ready(function () {
  let selectedUserIds = [];

  // Select All Functionality
  $("#datatableCheckAll").change(function () {
    $(".user-checkbox").prop("checked", this.checked); // Check/uncheck others

    selectedUserIds = []; // Reset when toggling select all
    if (this.checked) {
      $(".user-checkbox:checked").each(function () {
        selectedUserIds.push($(this).val());
      });
    }
    console.log("Selected User IDs:", selectedUserIds);
  });

  // Individual Checkbox Changes (maintain consistency)
  $(".user-checkbox").change(function () {
    let userId = $(this).val();
    if (this.checked) {
      selectedUserIds.push(userId);
      console.log("Selected User ID:", userId);
      console.log("Selected User IDs:", selectedUserIds);
    } else {
      let index = selectedUserIds.indexOf(userId);
      if (index > -1) {
        selectedUserIds.splice(index, 1);
        console.log("Selected User IDs:", selectedUserIds);
      }
    }
  });

  function sendUserIdsToPHP() {
    $.ajax({
      url: "../../controllers/users/user-controller.php",
      type: "POST",
      data: { userIds: selectedUserIds },
      success: function (response) {
        console.log("Response from PHP:", response);
      },
      error: function (error) {
        console.error("Error sending data:", error);
      },
    });
  }

  $("#btnDeleteUser").click(sendUserIdsToPHP);
});

let appliedFilters = {}; // Start with an empty object

const selectElements = document.querySelectorAll(".js-select");
selectElements.forEach((select) => {
  select.addEventListener("change", () => {
    const filterName = select.dataset.targetColumnIndex; // Get the filter's target
    const filterValue = select.value;

    if (filterValue) {
      appliedFilters[filterName] = filterValue; // Add to the tracker
    } else {
      delete appliedFilters[filterName]; // Remove if deselected
    }

    updateFilterCount(); // Call a function to update the count display
  });
});

function updateFilterCount() {
  const count = Object.keys(appliedFilters).length;
  const filterCountDisplay = document.getElementById("filterCount");

  if (count > 0) {
    filterCountDisplay.textContent = `${count}`;
  } else {
    filterCountDisplay.textContent = ``;
  }
}
