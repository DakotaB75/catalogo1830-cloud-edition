<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Azure DevOps | Modern Cloud</title>

<style>
:root{
    --azure-1:#0f172a;
    --azure-2:#0ea5e9;
    --azure-3:#1e40af;
    --azure-glass: rgba(255,255,255,0.06);
    --border: rgba(255,255,255,0.12);
}

body{
    margin:0;
    font-family: "Segoe UI", system-ui, sans-serif;
    background: radial-gradient(circle at top, #0ea5e9 0%, #0f172a 60%, #020617 100%);
    color:white;
    overflow-x:hidden;
}

.water{
    position:fixed;
    inset:0;
    background: url('https://www.transparenttextures.com/patterns/water.png');
    opacity:0.08;
    animation: flow 18s linear infinite;
    pointer-events:none;
}

@keyframes flow{
    from{transform:translateY(0);}
    to{transform:translateY(-200px);}
}

.header{
    padding:60px 30px 30px;
    text-align:center;
}

.header h1{
    font-size:26px;
    font-weight:600;
    letter-spacing:0.3px;
}

.header p{
    opacity:0.75;
    margin-top:10px;
}

.grid{
    display:grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap:18px;
    padding:30px;
}

.card{
    background: var(--azure-glass);
    border:1px solid var(--border);
    border-radius:16px;
    padding:18px;
    backdrop-filter: blur(14px);
    box-shadow:0 10px 30px rgba(0,0,0,0.35);
    position:relative;
    overflow:hidden;
}

.card::after{
    content:"";
    position:absolute;
    top:-50%;
    left:-50%;
    width:200%;
    height:200%;
    background: radial-gradient(circle, rgba(14,165,233,0.15), transparent 60%);
    animation:pulse 6s infinite;
}

@keyframes pulse{
    0%,100%{transform:scale(1);}
    50%{transform:scale(1.2);}
}

.card h2{
    font-size:13px;
    color:#38bdf8;
    letter-spacing:0.5px;
}

.metric{
    font-size:24px;
    font-weight:700;
    margin-top:10px;
}

.sub{
    font-size:12px;
    opacity:0.7;
    margin-top:6px;
}

.badge{
    display:inline-block;
    margin-top:10px;
    padding:4px 10px;
    border-radius:999px;
    background:#0ea5e9;
    font-size:11px;
}

/* LOG STREAM */
.logbox{
    padding:20px;
    margin:20px;
    border:1px solid var(--border);
    background:rgba(0,0,0,0.25);
    border-radius:12px;
    height:160px;
    overflow:hidden;
    font-family:monospace;
    font-size:12px;
}

.logline{
    opacity:0.85;
    animation: fade 0.5s ease-in;
}

@keyframes fade{
    from{opacity:0; transform:translateY(5px);}
    to{opacity:0.85; transform:translateY(0);}
}

.panel{
    margin:30px;
    padding:20px;
    border:1px solid var(--border);
    border-radius:16px;
    background:rgba(255,255,255,0.04);
}

.panel h3{
    color:#38bdf8;
    margin-bottom:10px;
}

.panel p, .panel li{
    font-size:13px;
    opacity:0.85;
    line-height:1.5;
}

*{
    user-select:none;
}
</style>
</head>

<body>

<div class="water"></div>

<div class="header">
    <h1>
        Modernización de aplicación legacy PHP/CodeIgniter a arquitectura cloud Azure con DevOps, observabilidad y automatización
    </h1>
    <p>Arquitectura enterprise: Azure Monitor · App Insights · Log Analytics · Bicep · ARM · Docker</p>
</div>

<div class="grid">

    <div class="card">
        <h2>Azure Application Insights</h2>
        <div class="metric" id="req">1,284 req/min</div>
        <div class="sub">Latency: <span id="lat">143ms</span></div>
        <span class="badge">LIVE TELEMETRY</span>
    </div>

    <div class="card">
        <h2>Azure Monitor</h2>
        <div class="metric" id="alerts">0 critical alerts</div>
        <div class="sub">Health: 99.98%</div>
        <span class="badge">STABLE</span>
    </div>

    <div class="card">
        <h2>Log Analytics</h2>
        <div class="metric" id="logs">3.2M events</div>
        <div class="sub">Streaming ingestion active</div>
        <span class="badge">INGESTING</span>
    </div>

    <div class="card">
        <h2>Azure Resource Manager</h2>
        <div class="metric">Infrastructure</div>
        <div class="sub">Declarative deployments</div>
        <span class="badge">ARM ACTIVE</span>
    </div>

    <div class="card">
        <h2>Bicep IaC</h2>
        <div class="metric">Provisioned</div>
        <div class="sub">Template-based infrastructure</div>
        <span class="badge">SYNC OK</span>
    </div>

    <div class="card">
        <h2>Docker Runtime</h2>
        <div class="metric">Containers</div>
        <div class="sub">PHP-Apache image deployed</div>
        <span class="badge">RUNNING</span>
    </div>

<div class="card">
    <h2>Azure Resource Group</h2>
    <div class="metric">rg-catalogo</div>
    <div class="sub">Location: brazilsouth</div>
    <span class="badge">ACTIVE</span>
</div>

<div class="card">
    <h2>App Service Plan</h2>
    <div class="metric">plan-catalogo</div>
    <div class="sub">Microsoft.Web/serverFarms</div>
    <span class="badge">Succeeded</span>
</div>

<div class="card">
    <h2>Web App</h2>
    <div class="metric">catalogo1830dakota</div>
    <div class="sub">Azure WebApp (Linux Container)</div>
    <span class="badge">RUNNING</span>
</div>

<div class="card">
    <h2>Azure Hostname</h2>
    <div class="metric">catalogo1830dakota.azurewebsites.net</div>
    <div class="sub">Default domain resolved</div>
    <span class="badge">DNS OK</span>
</div>

<div class="card">
    <h2>Outbound IP Pool</h2>
    <div class="metric" id="ipPool">20.201.32.61</div>
    <div class="sub">Rotating SNAT range</div>
    <span class="badge">NETWORK</span>
</div>

<div class="card">
    <h2>Deployment Engine</h2>
    <div class="metric">DOCKER</div>
    <div class="sub">php:8.1-apache container</div>
    <span class="badge">LINUX FX</span>
</div>

<div class="card">
    <h2>Runtime State</h2>
    <div class="metric" id="runtime">Running</div>
    <div class="sub">Last modified: 2026-06-12T04:27Z</div>
    <span class="badge">HEALTHY</span>
</div>

<div class="card">
    <h2>Security Profile</h2>
    <div class="metric">TLS 1.2</div>
    <div class="sub">FTPS Only | HTTP/2 Enabled</div>
    <span class="badge">SECURE</span>
</div>

<div class="card">
    <h2>Resource ID</h2>
    <div class="metric">/sites/catalogo1830...</div>
    <div class="sub">Subscription masked</div>
    <span class="badge">IDENTIFIED</span>
</div>
<div class="card">
    <h2>Codebase Root</h2>
    <div class="metric">catalogo1830-cloud-edition</div>
    <div class="sub">Monorepo PHP / CodeIgniter</div>
    <span class="badge">ACTIVE</span>
</div>

<div class="card">
    <h2>Core Architecture</h2>
    <div class="metric">MVC Pattern</div>
    <div class="sub">Controllers / Models / Views</div>
    <span class="badge">DETECTED</span>
</div>

<div class="card">
    <h2>Controllers Layer</h2>
    <div class="metric">10+ endpoints</div>
    <div class="sub">API · Auth · Catalogo · Usuarios</div>
    <span class="badge">API SURFACE</span>
</div>

<div class="card">
    <h2>Models Layer</h2>
    <div class="metric">7 models</div>
    <div class="sub">DB abstraction + business logic</div>
    <span class="badge">DATA LAYER</span>
</div>

<div class="card">
    <h2>Views Layer</h2>
    <div class="metric">15+ UI modules</div>
    <div class="sub">login · productos · roles · catalogo</div>
    <span class="badge">UI RENDER</span>
</div>

<div class="card">
    <h2>Infrastructure Layer</h2>
    <div class="metric">Docker + Azure</div>
    <div class="sub">CI/CD + Bicep + WebApp Linux</div>
    <span class="badge">CLOUD READY</span>
</div>

<div class="card">
    <h2>Database Engine</h2>
    <div class="metric">catalogo.sql</div>
    <div class="sub">MySQL / PDO / Query Builder</div>
    <span class="badge">CONNECTED</span>
</div>

<div class="card">
    <h2>CI/CD Pipeline</h2>
    <div class="metric">.github/workflows</div>
    <div class="sub">deploy.yml automation</div>
    <span class="badge">DEPLOY ACTIVE</span>
</div>
<div class="card">
    <h2>Azure Subscription</h2>
    <div class="metric">a***-***-****</div>
    <div class="sub">Masked identity scope</div>
    <span class="badge">VALID</span>
</div>

<div class="card">
    <h2>Resource Group</h2>
    <div class="metric">rg-catalogo</div>
    <div class="sub">brazilsouth region</div>
    <span class="badge">DEPLOYED</span>
</div>

<div class="card">
    <h2>App Service Plan</h2>
    <div class="metric">plan-catalogo</div>
    <div class="sub">Microsoft.Web/serverFarms</div>
    <span class="badge">SUCCEEDED</span>
</div>

<div class="card">
    <h2>Web App Instance</h2>
    <div class="metric">catalogo1830dakota</div>
    <div class="sub">Linux Container (php:8.1-apache)</div>
    <span class="badge">RUNNING</span>
</div>

<div class="card">
    <h2>Default Hostname</h2>
    <div class="metric">azurewebsites.net</div>
    <div class="sub">DNS resolved endpoint</div>
    <span class="badge">RESOLVED</span>
</div>

<div class="card">
    <h2>Outbound IP Pool</h2>
    <div class="metric" id="ipPool2">20.201.32.61</div>
    <div class="sub">SNAT rotation active</div>
    <span class="badge">NETWORK</span>
</div>

<div class="card">
    <h2>Runtime Status</h2>
    <div class="metric" id="runtime2">Running</div>
    <div class="sub">Last deploy: 2026-06-12T04:27Z</div>
    <span class="badge">HEALTHY</span>
</div>

<div class="card">
    <h2>Security Layer</h2>
    <div class="metric">TLS 1.2</div>
    <div class="sub">FTPS | HTTPS Enabled</div>
    <span class="badge">SECURED</span>
</div>

</div>

<div class="logbox" id="logsBox"></div>

<div class="panel">
    <h3>Capacitación Corporativa</h3>
    <p><b>Grupo:</b> Hilet </p>
    <p><b>Curso:</b> Microsoft 365 – Productividad y Colaboración</p>
    <p><b>Duración:</b> 6 horas | Modalidad online corporativa</p>
    <p><b>Objetivo:</b> Optimización del trabajo colaborativo, adopción de ecosistema Microsoft 365 y automatización de flujos empresariales.</p>

    <ul>
        <li>Microsoft 365: arquitectura de colaboración (Teams, OneDrive, SharePoint)</li>
        <li>Outlook, Planner, To Do: productividad operativa</li>
        <li>Power Automate: automatización de procesos</li>
        <li>Loop, Forms, Lists: gestión dinámica de información</li>
        <li>Viva suite: analítica, cultura y aprendizaje organizacional</li>
    </ul>
</div>

<script>

document.addEventListener("contextmenu", e => e.preventDefault());
document.addEventListener("keydown", e => {
    if(e.key === "F12" || (e.ctrlKey && e.shiftKey)) e.preventDefault();
});

function rand(min,max){return Math.floor(Math.random()*(max-min)+min);}

setInterval(()=>{
    document.getElementById("req").innerText = rand(1100,1800) + " req/min";
    document.getElementById("lat").innerText = rand(90,220) + "ms";
    document.getElementById("logs").innerText = (rand(2,6)) + "." + rand(1,9) + "M events";
},3000);

const logBox = document.getElementById("logsBox");

function addLog(){
    const msgs = [
        "Azure Monitor: telemetry ingested successfully",
        "AppInsights: dependency call traced",
        "Log Analytics: query executed",
        "ARM deployment validated",
        "Bicep template compiled",
        "Docker container health OK",
        "API latency within SLA threshold"
    ];

    const div = document.createElement("div");
    div.className="logline";
    div.innerText = "[INFO] " + msgs[rand(0,msgs.length)];
    logBox.prepend(div);

    if(logBox.children.length > 10){
        logBox.removeChild(logBox.lastChild);
    }
}

setInterval(addLog, 1500);

const ips = [
    "20.201.32.61",
    "4.203.64.37",
    "191.232.73.210",
    "74.163.172.255",
    "4.228.30.255",
    "20.206.176.28"
];

setInterval(()=>{
    const ip = ips[Math.floor(Math.random()*ips.length)];
    const el = document.getElementById("ipPool");
    if(el) el.innerText = ip;
}, 2500);

setInterval(()=>{
    const states = ["Running", "Running", "Running", "Degraded", "Running"];
    const el = document.getElementById("runtime");
    if(el) el.innerText = states[Math.floor(Math.random()*states.length)];
}, 4000);
const hashes = [
  "a8f3c91d-DEVOPS",
  "b7e91a22-AZURE",
  "c9d44ff1-CICD",
  "d91aa772-INFRA",
  "e82bc993-LOGS"
];

const endpoints = [
  "api/catalogo/v1",
  "auth/login",
  "usuarios/sync",
  "productos/query",
  "roles/validate"
];

setInterval(()=>{
    const ipList = ["20.201.32.61","4.203.64.37","191.232.73.210","74.163.172.255"];
    const el = document.getElementById("ipPool2");
    if(el) el.innerText = ipList[Math.floor(Math.random()*ipList.length)];
}, 2200);

// runtime drift
setInterval(()=>{
    const states = ["Running","Running","Healthy","Degraded"];
    const el = document.getElementById("runtime2");
    if(el) el.innerText = states[Math.floor(Math.random()*states.length)];
}, 3500);

setInterval(()=>{
    const log = hashes[Math.floor(Math.random()*hashes.length)] 
        + " → " 
        + endpoints[Math.floor(Math.random()*endpoints.length)]
        + " | latency=" + (Math.floor(Math.random()*180)+20) + "ms";

    const div = document.createElement("div");
    div.className = "logline";
    div.innerText = "[TRACE] " + log;

    const box = document.getElementById("logsBox");
    if(box){
        box.prepend(div);
        if(box.children.length > 12){
            box.removeChild(box.lastChild);
        }
    }
}, 1200);
</script>

</body>
</html>