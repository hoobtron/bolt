<?php
	include 'path.php';
		$test = $line["test"];
	echo $test;
?>

<script>
	ga('create', 'UA-1796932-17', 'auto' , 'impfenTracker');
	ga('impfenTracker.send', 'pageview');
</script>
<div class="impfen-content">




<script type="text/javascript">

$(function(){
    // this will get the full URL at the address bar
    var url = window.location.href;
	console.log(url);
    // passes on every "a" tag

	var count = document.getElementsByClassName('container');
	var countereins = count.length;
	document.getElementById('alle').innerHTML = "Alle Inhalte (" + countereins + ")" ;

	var count = document.getElementsByClassName('container allgemein');
	var counterzwei = count.length;
	document.getElementById('allgemein').innerHTML = "Allgemein (" + counterzwei + ")" ;

	var count = document.getElementsByClassName('container epid');
	var counterdrei = count.length;
	document.getElementById('epid').innerHTML = "Epid.Bull (" + counterdrei + ")" ;

	var count = document.getElementsByClassName('container erwachsene');
	var countervier = count.length;
	document.getElementById('erwachsene').innerHTML = "Erwachsene (" + countervier + ")" ;

	var count = document.getElementsByClassName('container hepatitis');
	var counterfuenf = count.length;
	document.getElementById('hepatitis').innerHTML = "Hepatitis (" + counterfuenf + ")" ;

	/**var count = document.getElementsByClassName('container hpv');
	var countersechs = count.length;
	document.getElementById('hpv').innerHTML = "HPV (" + countersechs + ")" ;**/

	/**var count = document.getElementsByClassName('container impfpraxis');
	var countersieben = count.length;
	document.getElementById('impfpraxis').innerHTML = "Impfpraxis (" + countersieben + ")" ;**/

	var count = document.getElementsByClassName('container influenza');
	var countersechs = count.length;
	document.getElementById('influenza').innerHTML = "Influenza (" + countersechs + ")" ;

	var count = document.getElementsByClassName('container kinder');
	var countersieben = count.length;
	document.getElementById('kinder').innerHTML = "Kinder (" + countersieben + ")" ;

	var count = document.getElementsByClassName('container masern');
	var counteracht = count.length;
	document.getElementById('masern').innerHTML = "Masern (" + counteracht + ")" ;

	var count = document.getElementsByClassName('container pertussis');
	var counterneun = count.length;
	document.getElementById('pertussis').innerHTML = "Pertussis (" + counterneun + ")" ;

	var count = document.getElementsByClassName('container reise');
	var counterzehn = count.length;
	document.getElementById('reise').innerHTML = "Reise (" + counterzehn + ")" ;

	/**var count = document.getElementsByClassName('container rota');
	var counterzwoelf = count.length;
	document.getElementById('rota').innerHTML = "Rota (" + counterzwoelf + ")" ;**/

	var count = document.getElementsByClassName('container impfpraxis');
	var counterelf = count.length;
	document.getElementById('impfpraxis').innerHTML = "Impfpraxis (" + counterelf + ")" ;

	var count = document.getElementsByClassName('container webinare');
	var counterzwoelf = count.length;
	document.getElementById('webinare').innerHTML = "Webinare (" + counterzwoelf + ")" ;

    $(".impfen-navbar-nav a").each(function() {
            // checks if its the same on the address bar
        if(url == (this.href)) {
            $(this).closest("li").addClass("active");
		console.log(this.href);
        }
    });
});


function filterPosts(className)
{
	var elems = document.getElementsByClassName('container');
	if (className == '*')
	{
		for(var i = 0; i < elems.length; i++)
		{
			elems[i].style.display = 'inline';
		}
	}
	else
	{
		for(var i = 0; i < elems.length; i++)
		{
			if (elems[i].classList.contains(className))
			{
				elems[i].style.display = 'inline';
			}
			else
			{
				elems[i].style.display = 'none';
			}
		}
	}
}


function searchFilterPosts(searchString)
{
	var elems = document.getElementsByClassName('container');
	var orig =searchString;
	//console.log(searchString);
	//console.log(elems.length);
	searchString = searchString.toLowerCase();
	//console.log(searchString);
	var count = 0;
	for(var i = 0; i < elems.length; i++)
	{

		if(elems[i].innerHTML.toLowerCase().indexOf(searchString) != -1) {
			elems[i].style.display = 'inline';
			count++;
		}else{
			elems[i].style.display = 'none';
		}
	}
document.getElementById('searchResult').innerHTML = "<strong>Es wurden "+count+" Beiträge zu Ihrem Suchbegriff: <q>"+orig+"</q> gefunden.</strong>";
}

function makeActive(e){
    for(var i = 1; i<=12;i++){
	var maptab = document.getElementById('maptab'+i)
	maptab.className = '';
	}

    console.log(e);
    var maptab = document.getElementById('maptab'+e);
    maptab.className = maptab.className + ' active';

}



/*function showSource(number)
{
	document.getElementById('log' + number).style.display='inline-block';
};*/

function showSource(number) {
	if(document.getElementById('log'+number).style.display == 'inline-block'){
		document.getElementById('log'+number).style.display='none';
	}else if(document.getElementById('log'+number).style.display == 'none'){
		document.getElementById('log'+number).style.display='inline-block';
	}
}

</script>


<div class="impfen-main-content">

<?php include 'header.php'; ?>

	<br />
	<div class="impfen-filter-box">
		<ul class="list">
			<div style="border:1px solid #C4C4C4; padding:8px">
			<li id="maptab1" class="active"><button id="alle" class="gaFilter blue-box" onclick="filterPosts('*');makeActive('1');">Alle Inhalte</button></li>
			<li id="maptab2"><button  id="allgemein" class="gaFilter blue-box" onclick="filterPosts('allgemein');makeActive('2');">Allgemein</button></li>
			<li id="maptab3"><button id="epid" class="gaFilter blue-box" onclick="filterPosts('epid');makeActive('3');">Epid.Bull</button></li>
			<li id="maptab4"><button id="erwachsene" class="gaFilter blue-box" onclick="filterPosts('erwachsene');makeActive('4');">Erwachsene</button></li>
			<li id="maptab5"><button id="hepatitis" class="gaFilter blue-box" onclick="filterPosts('hepatitis');makeActive('5');">Hepatitis</button></li>
			<!--li id="maptab6"><button id="hpv" class="gaFilter blue-box" onclick="filterPosts('hpv');makeActive('6');">HPV</button></li-->
			<!--li id="maptab7"><button id="impfpraxis" class="gaFilter blue-box" onclick="filterPosts('impfpraxis');makeActive('7');">Impfpraxis</button></li-->
			<li id="maptab6"><button id="influenza" class="gaFilter blue-box" onclick="filterPosts('influenza');makeActive('6');">Influenza</button></li>
			<li id="maptab7"><button id="kinder" class="gaFilter blue-box" onclick="filterPosts('kinder');makeActive('7');">Kinder</button></li>
			<li id="maptab8"><button id="masern" class="gaFilter blue-box" onclick="filterPosts('masern');makeActive('8');">Masern</button></li>
			<li id="maptab9"><button id="pertussis" class="gaFilter blue-box" onclick="filterPosts('pertussis');makeActive('9');">Pertussis</button></li>
			<li id="maptab10"><button id="reise" class="gaFilter blue-box" onclick="filterPosts('reise');makeActive('10');">Reise</button></li>
			<!--li id="maptab12"><button id="rota" class="gaFilter blue-box" onclick="filterPosts('rota');makeActive('12');">Rota</button></li-->
			<li id="maptab11"><button id="impfpraxis" class="gaFilter blue-box" onclick="filterPosts('impfpraxis');makeActive('11');">Impfpraxis</button></li>
			<li id="maptab12"><button id="webinare" class="gaFilter blue-box" onclick="filterPosts('webinare');makeActive('12');">Webinare</button></li>
			<div style="clear:both"></div>
			<div style="clear:both"></div>
			</div>
			<li id="searchField">
				<input type=text placeholder="Suchbegriff" id="searchInput" class="impfen-search" value=""></input>
				<input class="blue-box" type="button" id="btnSearch" value="Suche" onclick="makeActive('1'); searchFilterPosts(document.getElementById('searchInput').value);ga(multiSend({hitType: 'event', eventCategory: 'wissensarchiv / impfen', eventAction: 'filter content', eventLabel: 'search input: '+document.getElementById('searchInput').value}));" /><!-- multisend-Ausnahme mit Suchwert-Übergabe -->
			</li>
		</ul>
	</div>
	
	<script type="text/javascript">
	$("#searchInput").keyup(function(event){
		if(event.keyCode == 13){
			$("#btnSearch").click();
		}
	});
	</script>
	
	<br />
	<div class="posts" id="mainContainer" style="padding-top:10px">

	<div id="searchResult"></div>
	
	<?php
	include 'comment.php';
	
	$dbconn = pg_connect("host=esanum.de port=5432 dbname=esanum user=web password=e93867ba43%2C"); 
	require 'beitraege.php'; 
	include 'beitraege-archiv.php'; 
	pg_close($dbconn);
	?>


	<script type="text/javascript">
        $(document).ready(function() {
            $('.fancybox').fancybox();			
        });
    </script>

	</div>
</div>


<?php include 'sidebar.php'; ?>
	
</div>
