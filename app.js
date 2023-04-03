const form=document.querySelector('form')
form.addEventListener('submit', function(e){
    e.preventDefault();
    fetch('http://10.170.10.32/connect.php', {
  method: 'POST',
  body: JSON.stringify({data: 'myData'}),
  headers: {
    'Content-Type': 'application/json'
  }
})
.then(response => response.text())
.then(data => console.log(data))
.catch(error => console.error(error));
})



