const menuItems = document.getElementsByClassName("menu-item");
let activeItem = menuItems[0];

for (let menuItem of menuItems) {
  menuItem.addEventListener("click", onClickHandler);
}

function onClickHandler() {
  if (this === activeItem) {
    return;
  }

  activeItem.classList.remove("active");
  document.getElementById(`${activeItem.id}-section`).classList.add("hidden");

  activeItem = this;

  activeItem.classList.add("active");
  document.getElementById(`${activeItem.id}-section`).classList.remove("hidden");
}
