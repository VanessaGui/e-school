let profil = document.querySelectorAll('.profil');
let profileCard = document.querySelectorAll('.profile-card');

for(let i = 0; i < profil.length; i++){
    profil[i].addEventListener('click', () => getProfileCard());
}

function getProfileCard(){
  for(let i = 0; i < profileCard.length; i++){
    profileCard[i].classList.toggle('hidden');
  }
}

