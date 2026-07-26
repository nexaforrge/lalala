<?php
// Example dynamic data
$site_name = "Sahil Bhai Official";
$year = date("Y");

// Track visits (simple counter)
$counter_file = "counter.txt";
if (!file_exists($counter_file)) {
    file_put_contents($counter_file, 0);
}
$visits = (int)file_get_contents($counter_file);
$visits++;
file_put_contents($counter_file, $visits);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $site_name; ?> | Official</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
/* (YOUR FULL CSS — unchanged) */
* { margin:0; padding:0; box-sizing:border-box; }
body { background:#0f0f0f; font-family:'Inter', sans-serif; color:white; }
.super-flex { display:flex; justify-content:center; align-items:center; min-height:100vh; width:100%; padding:20px; }
.container { width:100%; max-width:420px; text-align:center; }
.marquee-box { background:#1a1a1a; padding:10px; border-radius:8px; margin-bottom:20px; border:1px solid #2aff7a; color:#2aff7a; font-size:13px; font-weight:bold; }
.profile img { width:120px; height:120px; border-radius:12px; border:2px solid #2aff7a; }
h1 { margin:12px 0 5px; font-size:22px; }
.tagline { color:#aaa; font-size:14px; margin-bottom:15px; }
.join-text { font-size:14px; color:#ccc; margin:15px 0; }
.cta { background:#2aff7a; color:black; padding:16px; border-radius:10px; text-decoration:none; font-weight:bold; display:flex; justify-content:center; align-items:center; gap:10px; margin:15px 0; box-shadow:0 0 10px #2aff7a,0 0 30px #2aff7a; transition:0.3s; }
.cta:hover { transform:scale(1.05); box-shadow:0 0 20px #2aff7a,0 0 50px #2aff7a; }
.trust-line { font-size:14px; margin-top:10px; line-height:1.6; font-weight:bold; color:#2aff7a; }
.trust-box { background:#1a1a1a; padding:15px; border-radius:10px; margin-top:15px; font-size:14px; }
.badges { margin-top:10px; }
.badge { display:inline-block; background:linear-gradient(135deg,#1a1a1a,#222); padding:8px 14px; margin:6px; border-radius:25px; font-size:13px; font-weight:600; border:1px solid #2aff7a; box-shadow:0 0 10px rgba(42,255,122,0.3); }
.ads-link { margin-top:20px; }
.ads-link a { color:#2aff7a; text-decoration:none; font-weight:bold; font-size:12px; letter-spacing:2px; }
.footer { margin-top:15px; font-size:11px; color:#666; }
.visitor-count { margin-top:10px; font-size:12px; color:#aaa; }
</style>
</head>

<body>

<div class="super-flex">
<div class="container">

<div class="marquee-box">
    <marquee>🔥 TRUSTED COMMUNITY | NO SPAM | DAILY UPDATES | JOIN NOW 🔥</marquee>
</div>

<div class="profile">
    <img src="moneymaker.jpg">
</div>

<h1><?php echo $site_name; ?></h1>

<div class="tagline">India's Trusted Prediction Community</div>

<div class="join-text">
    Join the original channel for daily updates
</div>

<a href="https://t.me/+-k2h4-u_8Dw1ZjM1" class="cta">
    <i class="fab fa-telegram-plane"></i> Join Telegram Channel
</a>

<div class="trust-line">
⭐ Trusted by 50,000+ members Across India <br>
100% FREE • NO SPAM • INSTANT UPDATES
</div>

<div class="trust-box">
   🔒 100% Secure & Private Community <br>
🚫 Zero Spam Policy — Only important updates <br>
⚡ Instant & Fast Updates
</div>

<div class="badges">
    <span class="badge">🔒 100% Secure</span>
    <span class="badge">🚫 No Spam</span>
    <span class="badge">⚡ Fast Updates</span>
</div>

<div class="ads-link">
    <a href="https://t.me/Richard_Carter7">ADS MANAGED BY RAJ</a>
</div>

<!-- 🔥 Dynamic Visitor Counter -->
<div class="visitor-count">
👁️ Visitors: <?php echo $visits; ?>
</div>

<div class="footer">
© <?php echo $year; ?> <?php echo $site_name; ?>
</div>

</div>
</div>

<script>
// (YOUR FULL JS — unchanged)
document.addEventListener('contextmenu', e => e.preventDefault());

document.addEventListener('keydown', function(e) {
    if (e.key === "F12") e.preventDefault();
    if (e.ctrlKey && e.shiftKey && (e.key === "I" || e.key === "J" || e.key === "C")) e.preventDefault();
    if (e.ctrlKey && e.key === "u") e.preventDefault();
    if (e.ctrlKey && e.key === "s") e.preventDefault();
    if (e.ctrlKey && e.key === "c") e.preventDefault();
});

setInterval(function() {
    let widthThreshold = window.outerWidth - window.innerWidth > 160;
    let heightThreshold = window.outerHeight - window.innerHeight > 160;
    if (widthThreshold || heightThreshold) {
        document.body.innerHTML = "<h1 style='color:red;text-align:center;margin-top:20%'>Access Denied</h1>";
    }
}, 1000);

document.addEventListener('selectstart', e => e.preventDefault());
document.addEventListener('dragstart', e => e.preventDefault());
</script>

</body>
</html>