
<h1>CrypX  Encryption system</h1>
<p>Library for encryption and decryption of strings or integers, based on PHP</p>
<p>Based on the openssl library</p>
<p>It is a simple library that allows you to encrypt and decrypt strings or integers</p>
<h2>How can i Use</h2>
<p>First you need to create an object of the class CrypX</p>
<p>Then you can use the methods of the class</p>
<p>Example:</p>
<pre>
    require_once('lib.php');
    $cryp = new CrypX();
    $key = $cryp->randKey(16);
    $iv = $cryp->randIv();
    $encrypted = $cryp->encrypt("Library for encryption and decryption of strings or integers, based on PHP",$key,$iv);
    $decrypt = $cryp->decrypt($encriptado,$key,$iv);
</pre>
<strong>It is important to keep the key and iv to decrypt the data</strong>
<h2>Explain</h2>
<ul>
    <li><p><strong>randKey: </strong>Its agenerates a random key with the required bytes</p></li>
    <li><p><strong>randIv: </strong>Its agenerates a random iv</p></li>
    <li><p><strong>encrypt: </strong>It encrypts the data with the key and iv</p></li>
    <li><p><strong>decrypt: </strong>It decrypts the data with the key and iv</p></li>
</ul>
<h2 center>By Aexstudios</h2>
