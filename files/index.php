<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap-responsive.css">
 <script type="text/javascript">
        //<!--
                function change_onglet(name)
                {
                        document.getElementById('onglet_'+anc_onglet).className = 'onglet_0 onglet';
                        document.getElementById('onglet_'+name).className = 'onglet_1 onglet';
                        document.getElementById('contenu_onglet_'+anc_onglet).style.display = 'none';
                        document.getElementById('contenu_onglet_'+name).style.display = 'block';
                        anc_onglet = name;
                }
        //-->
        </script>
</head>
<?php include 'header.html';?>
<body>
 <div class="systeme_onglets">
        <div class="onglets">
            <span class="onglet_0 onglet" id="onglet_diary" onclick="javascript:change_onglet('diary');">Diary</span>
            <span class="onglet_0 onglet" id="onglet_photos" onclick="javascript:change_onglet('photos');">Photos</span>
            <span class="onglet_0 onglet" id="onglet_exp" onclick="javascript:change_onglet('exp');">Experiments</span>
        </div>
        <div class="contenu_onglets">
            <div class="contenu_onglet" id="contenu_onglet_diary">
                <h1>Quoi?</h1>
                Un simple syst&egrave;me d'onglet utilisant les technologies:<br />
                <ul>
                    <li>(X)html</li>
                    <li>CSS</li>
                    <li>Javascript</li>
                </ul>
            </div>
            <div class="contenu_onglet" id="contenu_onglet_photos">
                <h1>Qui?</h1>
                C'est un script r&eacute;alis&eacute; par Ybouane,<br />
                Webmaster du site <a href="http://www.supportduweb.com/">http://www.supportduweb.com/</a>
            </div>
            <div class="contenu_onglet" id="contenu_onglet_exp">
                <h1>Pourquoi?</h1>
                Pour simplifier la navigation et la diviser en parties
            </div>
        </div>
    </div>
    <script type="text/javascript">
        //<!--
                var anc_onglet = 'diary';
                change_onglet(anc_onglet);
        //-->
        </script>

</body>
</html>
