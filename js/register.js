checkType = () => {
  const regType = document.getElementById("regTypeH").checked
    ? "hospital"
    : "reciever";
  if (regType == "hospital") {
    bg = document.getElementById("bloodGroup");
    bg.classList.add("d-none");
  } else {
    bg = document.getElementById("bloodGroup");
    bg.classList.remove("d-none");
  }
};
