// display profile
let profil = document.querySelectorAll(".profil");
let profileCard = document.querySelectorAll(".profile-card");

for (let i = 0; i < profil.length; i++) {
  profil[i].addEventListener("click", () => getProfileCard());
}

function getProfileCard() {
  for (let i = 0; i < profileCard.length; i++) {
    profileCard[i].classList.toggle("hidden");
  }
}

// Confirm delete
let suppr = document.querySelectorAll(".suppr-button");

if (suppr) {
  for (let i = 0; i < suppr.length; i++) {
    suppr[i].addEventListener("click", (event) => {
      if (
        !confirm("Êtes-vous sûr de vouloir supprimer cette ligne ?") == true
      ) {
        event.preventDefault();
      }
    });
  }
}

// system rating
const systemNotes = document.querySelectorAll('.container-note');
systemNotes.forEach(note => {
  const stars = note.querySelectorAll('.star');
  const checkboxes = note.querySelectorAll('.checkbox');

  function updateStars(rating) {
    stars.forEach(star => {
      star.classList.remove('staryellow');
      star.classList.add('stargrey');
      if (star.getAttribute('data-value') <= rating) {
        star.classList.add('staryellow');
      }
    });
  }

  stars.forEach(star => {
    star.addEventListener('click', function() {
      const starValue = this.getAttribute('data-value');
      updateStars(starValue);
      stars.forEach(s => this.classList.remove('stargrey'));
      checkboxes.forEach(cb => cb.checked = false);
      this.classList.add('staryellow');
      let previousSibling = this.previousElementSibling;
      while (previousSibling) {
        previousSibling.classList.add('staryellow');
        previousSibling = previousSibling.previousElementSibling;
      }
      
      for (let i = 0; i <= starValue; i++) {
        if(checkboxes[i].getAttribute('value') === this.getAttribute('data-value')){
          checkboxes[i].checked = true;
        }
      }
     
    });
    // star.addEventListener('mouseover', function() {
    //   stars.forEach(s => s.classList.remove('staryellow'));
    //   this.classList.add('staryellow');
    //   let previousSibling = this.previousElementSibling;
    //   while (previousSibling && previousSibling.classList.contains('star')) {
    //       previousSibling.classList.add('staryellow');
    //       previousSibling = previousSibling.previousElementSibling;
    //   }
    // });

    // star.addEventListener('mouseleave', function() {
    //   stars.forEach(s => s.classList.remove('staryellow'))
    // });
  });
});
