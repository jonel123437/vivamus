
document.querySelector('.nextButton').addEventListener('click', function() {
    document.querySelector('.dontaion').style.display = "block"
    document.querySelectorAll('.step').forEach(button => button.classList.remove('active'));
    document.getElementById('step2').classList.add('active');
    document.querySelector('.aboutgroup').style.display = "none"
    document.querySelector('.title').innerText = "Your donation"
    document.querySelector('.backButton').style.display = "block"
    document.querySelector('.buttoncontain').style.justifyContent = "space-between";
    document.getElementById('nextButton').style.display = "block"
    document.querySelector('.nextButton').style.display = "none"
})

document.querySelector('.backButton').addEventListener('click', function() {
    document.querySelectorAll('.step').forEach(button => button.classList.remove('active'));
    document.getElementById('step1').classList.add('active');
    document.querySelector('.title').innerText = "About you"
    document.querySelector('.dontaion').style.display = "none"
    document.querySelector('.aboutgroup').style.display = "block"
    document.querySelector('.backButton').style.display = "none"
    document.getElementById('nextButton').style.display = "none"
    document.querySelector('.nextButton').style.display = "block"
    document.querySelector('.buttoncontain').style.justifyContent = "end";
})

document.getElementById('nextButton').addEventListener('click', function() {
    document.querySelectorAll('.step').forEach(button => button.classList.remove('active'));
    document.getElementById('step3').classList.add('active');
    document.querySelector('.comment').style.display = "block"
    document.querySelector('.dontaion').style.display = "none"
    document.getElementById('backButton').style.display = "block"
    document.querySelector('.backButton').style.display = "none"
    document.querySelector('.title').innerText = "Comment Field"
    document.getElementById('nextButton').style.display = "none"
    document.querySelector('.finishButton').style.display = "block"
})

document.getElementById('backButton').addEventListener('click', function() {
    document.querySelectorAll('.step').forEach(button => button.classList.remove('active'));
    document.getElementById('step2').classList.add('active');
    document.querySelector('.comment').style.display = "none"
    document.querySelector('.title').innerText = "Your donation"
    document.querySelector('.dontaion').style.display = "block"
    document.getElementById('backButton').style.display = "none"
    document.querySelector('.backButton').style.display = "block"
    document.querySelector('.finishButton').style.display = "none"
    document.getElementById('nextButton').style.display = "block"
})



