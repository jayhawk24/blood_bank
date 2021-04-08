checkType = () => {
  const regType = document.getElementById("regTypeH").checked
    ? "hospital"
    : "reciever";
  if (regType === "reciever") {
    bg = document.getElementById("bloodGroup");
    bg.classList.remove("d-none");
  } else {
    bg = document.getElementById("bloodGroup");
    bg.classList.add("d-none");
  }
};
