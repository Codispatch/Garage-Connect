<?PHP
require_once("session.php");
if(!checkSession())
{
    RedirectTo("http://localhost/xampp/ProjectX/SigninPage.php");
    exit;
}	
?>
<div>    
	<span><i class="shopping-cart"></i></span>
	 <div class="clear"></div>
        <div class="items">
            <div class="item">
                <img style="width: 120px;" src="http://localhost/xampp/ProjectX/tri.png" alt="item" />
                 <h2>Tyre</h2>
    
                <p>Price: <em>$ 100</em>
				<p>Stock :<em>Available</em>
                </p>
           
            </div>
            <div class="item">
                <img src="http://localhost/xampp/ProjectX/mat.jpg" alt="item" />
                 <h2>Car MAT</h2>
    
                <p>Price: <em>$ 50</em>
				<p>Stock :<em>Available</em>
                </p>
            </div>
			 <div class="item">
                <img  src="http://localhost/xampp/ProjectX/seat.jpg" alt="item" />
                 <h2>Seat Cover</h2>
    
                <p>Price: <em>$ 20</em>
				<p>Stock :<em style="color:red" >Out of Stock</em>
                </p>
           
            </div>
            <div class="item">
                <img  src="http://localhost/xampp/ProjectX/oil.jpg" alt="item" />
                 <h2>Engine Oil</h2>
    
                <p>Price: <em>$ 40</em>
				<p>Stock :<em>Available</em>
                </p>
            </div>
        </div>
</div>		
		
<style>
.clear {
    clear: both;
}
.items {
    display: block;
    margin: 20px 0;
}
.item {
  background-color: #fff;
  float: left;
  margin: 0px 10px 10px 0;
  width: 209px;
  padding: 10px;
  height: 335px;
  padding-bottom: 30px;
}
.item img {
    display: block;
    margin: auto;
}
button {
    border: 1px solid #722A1B;
    padding: 4px 14px;
    background-color: #fff;
    color: #722A1B;
    text-transform: uppercase;
    float: right;
    margin: 5px 0;
    font-weight: bold;
    cursor: pointer;
}
span {
    float: right;
}
.shopping-cart {
    display: inline-block;
    background: url("shoping_cart1.png") no-repeat 0 0;
    width: 24px;
    height: 24px;
    margin: 0 100px 0 0;
}
</style>
