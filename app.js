const btnlogin = document.querySelector('#logbutton');
const logform = document.querySelector('#adlogin');
const err = document.querySelector('#err');
const errdiv = document.querySelector('#al');

logform.onsubmit = (e)=>{
	e.preventDefault();
}

btnlogin.onclick= () => {

	 let xhr = new XMLHttpRequest();
	 xhr.open("POST", "phpscripts/login.php", true);
	 xhr.onload=()=>{

	 	if (xhr.readyState === XMLHttpRequest.DONE){

	 		if (xhr.status === 200) {
                let data = xhr.response;
                if (data === "success") {

                	location.href ="./dashboard";
                }
                 else {
                  err.textContent = data; 
                  err.style.color = 'red';
                  
                }
            }

	 	}
	 }

	 	let form = new FormData(logform);
	 	xhr.send(form);
}




