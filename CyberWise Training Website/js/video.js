function displayCopyYear() {
  const copyrightsYear = document.querySelector(".copy-year");

  const date = new Date();
  const year = date.getFullYear();

  copyrightsYear.innerHTML = year;
}

displayCopyYear();
