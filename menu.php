
<nav class="menuprint">
<script>
		 $(function() {
$( "#menu" ).menu();
});
</script>

 <style>
 
.ui-menu { width: 140px; }
</style>
<?php
	include 'lang.php';
	
	if (isset($_GET['lang']) && !empty($_GET['lang']))
		{
		$lang=$_GET['lang'];
		}
	else
		{
		$lang='eng';
		}


echo '<ul id="menu">
	<li ><a href="product.php?lang='.$lang.'">'.$buy.'</a></li>
	<li><a href="sale.php?lang='.$lang.'">'.$sell.'</a></li>
	<li>
		<a href="stats.php?lang='.$lang.'">'.$stats.' <span class="arrow">&#9654;</span></a>
		<ul>
			<li><a href="stats.php?lang='.$lang.'">'.$buy.' '.$stats.'</a></li>
			<li><a href="sellstats.php?lang='.$lang.'">'.$sell.' '.$stats.'</a></li>
			<li><a href="graph.php?lang='.$lang.'">'.$graph.'</a></li>
		</ul>
	</li>
	
	<li>
		<a href="buyprice.php?lang='.$lang.'">'.$price.' <span class="arrow">&#9654;</span></a>
		<ul>
			<li><a href="buyprice.php?lang='.$lang.'">'.$buy.' '.$price.'</a></li>
			<li><a href="sellprice.php?lang='.$lang.'">'.$sell.' '.$price.'</a></li>
		</ul>
	</li>
	<li><a href="expenses.php?lang='.$lang.'">'.$expenses.'</a></li>
	<li><a href="stock.php?lang='.$lang.'">'.$stock.'</a></li>
	<li><a href="staff.php?lang='.$lang.'">'.$staff.'</a></li>
	<li>
		<a href="seller.php?lang='.$lang.'">'.$customer.' <span class="arrow">&#9654;</span></a>
		<ul>
			<li><a href="seller.php?lang='.$lang.'">'.$seller.'</a></li>
			<li><a href="buyer.php?lang='.$lang.'">'.$buyer.'</a></li>
		</ul>
	</li>
	<li>
		<a href="printbuy.php?lang='.$lang.'">'.$print.' <span class="arrow">&#9654;</span></a>
		<ul>
			<li><a href="printbuy.php?lang='.$lang.'">'.$printbuy.'</a></li>
			<li><a href="printsale.php?lang='.$lang.'">'.$printsale.'</a></li>
		</ul>
	</li>
	
	';
	?>
</ul>	
</nav>
<aside class="menuprint">

<?php
$path0= explode('/',$_SERVER['REQUEST_URI']);
$path=explode('?',$path0['2']);

?>

<a href="<?php echo $path['0'].'?lang=eng'; ?>" class="photo" style="text-decoration:none;"><img src="pics/ukflag.jpg"><a/>
<a href="<?php echo $path['0'].'?lang=thai'; ?>" class="photo" style="text-decoration:none;"><img src="pics/thaiflag.jpg"><a/>
</aside>
