const input = document.querySelectorAll('input'); 
function prevent(event) {
    event.preventDefault();
  }
      
input.addEventListener('subit', prevent);

