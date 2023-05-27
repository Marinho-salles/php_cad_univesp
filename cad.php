<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Consultas</title>
    
    
</head>

<body>
    <div class="container">
        <header>
            <h1>Consultas</h1>
        </header>
        <main class="code">
            <?php
            $nome = $_GET["nome"];
            $tell = ($_GET["telefone"]);
            $doctor = ($_GET["doutor"]);
            $date = ($_GET["data"]);
            ?>
        </main>
        <div class="containercad">
            <form>
                <li class="name">
                    <?php
                    echo "Nome: $nome"
                    ?>
                </li>
                <li class="telefone">
                    <?php
                    echo "Telefone: $tell"
                    ?>
                </li>
                <li class="doutor">
                    <?php
                    echo "Doutor/Doutora: $doctor"
                    ?>
                </li>
                <li class="date">
                    <?php
                    echo "Data: $date"
                    ?>
                </li>
            </form>
        </div>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </div>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>
