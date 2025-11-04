<?php
    $name=$email=$subject=$message="";
    $nameErr=$emailErr=$subjectErr=$messageErr="";

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        $nameErr="Name is required";
    }else{
        $name=$_POST['name'];
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "faqat harflar va bosh joy bo'lishi kerak!";
          }
    }
    if(empty($_POST['email'])){
        $emailErr="Email is required";
    }else{
        $email=$_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Noto'g'ri email format!";
          }
}
    if(empty($_POST['subject'])){
        $subjectErr="Subject is required";
    }else{
        $subject=$_POST['subject'];
        if (!preg_match("/^[a-zA-Z-' ]*$/",$subject)) {
            $subjectErr = "faqat harflar va bosh joy bo'lishi kerak!";
          }
}
}
?>
<!doctype html>
<html lang="uz">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Contact Us — Chiroyli Forma</title>
  <style>
    :root{
      --bg:#f9fafb;
      --card:#ffffffcc;
      --accent1:#06b6d4;
      --accent2:#7c3aed;
      --glass: rgba(0,0,0,0.05);
      --muted: rgba(20,20,20,0.7);
      --radius:14px;
      font-family: Inter, ui-sans-serif, system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;
    }

    *{box-sizing:border-box}
    html,body{height:100%}
    body{
      margin:0;
      background: radial-gradient(1200px 600px at 10% 10%, #e2e8f0 0%, var(--bg) 25%, #cbd5e1 100%);
      color:#1e293b;
      display:flex;
      align-items:center;
      justify-content:center;
      padding:32px;
      overflow-x:hidden;
      transition:background 0.6s ease, color 0.6s ease;
    }

    body.dark{
      background: radial-gradient(1200px 600px at 10% 10%, #071129 0%, #0f1724 25%, #02101a 100%);
      color:#e6eef8;
    }

    .wrapper{
      width:100%;
      max-width:980px;
      display:grid;
      grid-template-columns:1fr 420px;
      gap:28px;
      align-items:stretch;
      animation: fadeIn 1s ease forwards;
    }

    @keyframes fadeIn{
      from{opacity:0;transform:translateY(40px);}
      to{opacity:1;transform:translateY(0);}
    }

    .card, .side{
      animation: slideUp 1s ease forwards;
      opacity:0;
      animation-delay:.2s;
    }

    @keyframes slideUp{
      from{opacity:0;transform:translateY(20px);}
      to{opacity:1;transform:translateY(0);}
    }

    .card{
      background: var(--card);
      border-radius:var(--radius);
      padding:28px;
      backdrop-filter: blur(8px) saturate(120%);
      box-shadow: 0 10px 30px rgba(2,6,23,0.1);
      border:1px solid rgba(0,0,0,0.05);
      transition:background 0.6s ease, color 0.6s ease;
    }

    .brand{display:flex;gap:12px;align-items:center;margin-bottom:8px}
    .logo{
      width:44px;height:44px;border-radius:10px;display:grid;place-items:center;
      background:linear-gradient(135deg,var(--accent1),var(--accent2));font-weight:700;
      box-shadow:0 6px 18px rgba(124,58,237,0.18);
      transition:transform .3s ease;
    }
    .logo:hover{transform:rotate(10deg) scale(1.05)}

    h1{margin:0;font-size:20px;animation: fadeInText .8s ease forwards;}
    @keyframes fadeInText{from{opacity:0;transform:translateY(10px)}to{opacity:1;transform:translateY(0)}}

    p.lead{margin:8px 0 18px;color:var(--muted);font-size:14px;animation: fadeInText .9s ease forwards;}

    form{display:flex;flex-direction:column;gap:14px}

    .field{position:relative;transition:all .3s ease}

    input[type=text],input[type=email],textarea,select{
      width:100%;padding:14px 14px;border-radius:12px;border:1px solid rgba(0,0,0,0.1);
      background:rgba(255,255,255,0.7);
      color:inherit;font-size:14px;resize:vertical;min-height:44px;
      transition:all .25s ease;
    }
    input:focus,textarea:focus{border-color:var(--accent2);box-shadow:0 0 0 3px rgba(124,58,237,0.15)}

    body.dark input, body.dark textarea{
      background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.03));
      border-color:rgba(255,255,255,0.08);
    }

    textarea{min-height:120px;padding-top:18px}

    label.floater{
      position:absolute;left:14px;top:10px;pointer-events:none;transform-origin:left top;
      transition:all .18s cubic-bezier(.2,.9,.3,1);color:rgba(0,0,0,0.6);font-size:13px
    }
    body.dark label.floater{color:rgba(255,255,255,0.6)}

    input:focus + label.floater, input:not(:placeholder-shown) + label.floater,
    textarea:focus + label.floater, textarea:not(:placeholder-shown) + label.floater{
      transform: translateY(-28px) scale(.88);
      color:var(--accent1);
    }

    .row{display:flex;gap:12px}
    .row .field{flex:1}

    .actions{display:flex;gap:12px;align-items:center;margin-top:4px}

    .btn{
      background:linear-gradient(90deg,var(--accent1),var(--accent2));
      padding:12px 18px;border-radius:12px;border:0;color:white;font-weight:600;cursor:pointer;
      box-shadow:0 8px 24px rgba(6,182,212,0.08);transition:transform .25s ease,box-shadow .25s ease,background .4s ease;
    }
    .btn:hover{transform:translateY(-2px);box-shadow:0 10px 26px rgba(6,182,212,0.15)}
    .btn:active{transform:translateY(1px)}

    .btn.sending{background:linear-gradient(90deg,#22c55e,#16a34a)!important;animation: pulse 1s infinite alternate;}

    @keyframes pulse{
      from{box-shadow:0 0 10px rgba(34,197,94,0.3)}
      to{box-shadow:0 0 20px rgba(34,197,94,0.6)}
    }

    .ghost{background:transparent;border:1px solid rgba(0,0,0,0.1);color:var(--muted)}

    .side{
      display:flex;flex-direction:column;gap:12px;justify-content:center;padding:24px;border-radius:var(--radius);
      background:rgba(255,255,255,0.7);border:1px solid rgba(0,0,0,0.05);
      animation-delay:.4s;
      transition:background 0.6s ease;
    }
    body.dark .side{background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));border:1px solid rgba(255,255,255,0.03)}

    .info{display:flex;gap:12px;align-items:flex-start;opacity:0;animation:fadeIn .8s ease forwards;}
    .info:nth-child(1){animation-delay:.5s}
    .info:nth-child(2){animation-delay:.7s}
    .info:nth-child(3){animation-delay:.9s}

    .info .icon{width:44px;height:44px;border-radius:10px;background:var(--glass);display:grid;place-items:center;transition:transform .3s ease}
    .info .icon:hover{transform:scale(1.1) rotate(8deg)}

    .muted{color:var(--muted);font-size:14px}
    .small{font-size:13px;color:rgba(0,0,0,0.6)}
    body.dark .small{color:rgba(255,255,255,0.6)}

    .toast{display:none;padding:12px;border-radius:12px;background:linear-gradient(90deg, rgba(6,182,212,0.12), rgba(124,58,237,0.08));color:var(--muted);animation:fadeIn .3s ease forwards;}
    .toast.show{display:block}

    .toggle-theme{
      position:absolute;top:20px;right:20px;cursor:pointer;
      background:transparent;border:1px solid rgba(0,0,0,0.1);border-radius:8px;padding:8px 14px;font-weight:600;
      transition:all .3s ease;
    }
    body.dark .toggle-theme{border-color:rgba(255,255,255,0.2);color:#fff}

    @media (max-width:880px){
      .wrapper{grid-template-columns:1fr;max-width:720px}
      .side{order:2}
    }
  </style>
</head>
<body>
  <button id="themeToggle" class="toggle-theme">🌗</button>
  <div class="wrapper">
    <div class="card">
      <div class="brand">
        <div class="logo">CU</div>
        <div>
          <h1>Biz bilan bog'laning</h1>
          <p class="lead">Savollar, hamkorlik yoki feedback — xabar qoldiring, biz javob beramiz.</p>
        </div>
      </div>

      <form action=""  method="POST" id="contactForm" novalidate>
        <div class="row">
          <div class="field">
            <input id="name" name="name" type="text" placeholder=" " required aria-required="true" value="<?=$name?>"/>
            <span style="color: red;"> <?=$nameErr?> </span>
            <label for="name" class="floater">Ism</label>
          </div>
          <div class="field">
            <input id="email" name="email" type="email" placeholder=" " required aria-required="true" value="<?=$email?>"/>
            <span style="color:red;"> <?=$emailErr?></span>
            <label for="email" class="floater">Email</label>
          </div>
        </div>

        <div class="field">
          <input id="subject" name="subject" type="text" placeholder=" " value="<?=$subject?>"/>
          <span style="color: red;"> <?= $subjectErr ?></span>
          <label for="subject" class="floater">Mavzu</label>
        </div>

        <div class="field">
          <textarea id="message" name="message" placeholder=" " required aria-required="true"></textarea>
          <label for="message" class="floater">Xabar matni</label>
        </div>

        <div style="display:flex;gap:12px;align-items:center;justify-content:space-between">
          <div class="small muted">Max 5MB fayl qo'shish mumkin</div>
          <div style="display:flex;gap:8px;align-items:center">
            <input id="attach" name="attach" type="file" accept="image/*,.pdf">
          </div>
        </div>

        <div class="actions">
          <button type="submit" class="btn" id="submitBtn">Yuborish</button>
          <button type="reset" class="btn ghost">Tozalash</button>
          <div style="flex:1"></div>
        </div>

        <div id="toast" class="toast" role="status" aria-live="polite"></div>
      </form>
    </div>

    <aside class="side">
      <div class="info">
        <div class="icon">📧</div>
        <div>
          <div class="small">Email</div>
          <div class="muted">hello@mysite.uz</div>
        </div>
      </div>

      <div class="info">
        <div class="icon">📍</div>
        <div>
          <div class="small">Manzil</div>
          <div class="muted">Toshkent, O'zbekiston</div>
        </div>
      </div>

      <div class="info">
        <div class="icon">⏰</div>
        <div>
          <div class="small">Ish vaqti</div>
          <div class="muted">Dushanba — Jum'a, 09:00 — 18:00</div>
        </div>
      </div>

      <div style="margin-top:12px" class="small muted">Ijtimoiy tarmoqlar: @mysite</div>
    </aside>
  </div>

  <script>
    // const form = document.getElementById('contactForm');
    // const toast = document.getElementById('toast');
    // const themeToggle = document.getElementById('themeToggle');
    // const submitBtn = document.getElementById('submitBtn');

    // themeToggle.addEventListener('click', ()=>{
    //   document.body.classList.toggle('dark');
    // });

    // function showToast(msg){
    //   toast.textContent = msg;
    //   toast.classList.add('show');
    //   setTimeout(()=> toast.classList.remove('show'), 4500);
    // }

    // form.addEventListener('submit', (e)=>{
    //   e.preventDefault();
    //   const data = new FormData(form);
    //   if(!data.get('name') || !data.get('email') || !data.get('message')){
    //     showToast('Iltimos, barcha majburiy maydonlarni to\'ldiring.');
    //     return;
    //   }
    //   submitBtn.classList.add('sending');
    //   submitBtn.textContent = 'Yuborilmoqda...';
    //   setTimeout(()=>{
    //     showToast('Xabaringiz yuborildi! Tez orada javob beramiz.');
    //     submitBtn.classList.remove('sending');
    //     submitBtn.textContent = 'Yuborish';
    //     form.reset();
    //   },2000);
    // });
  </script>
</body>
</html>