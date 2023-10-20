<h1>Saját nézet</h1>

<!-- html comment -->
<?php
// php comment
/*
többsoros comment
*/
?>
{{--Laravel comment --}}
<?php
echo 1+1
?>
{{ 1+1}}

<?php
$names = ["Pali","Pityu"];
if(count($names)> 0){
echo "Nem üres";
}else{
echo "Üres" ;   
}
?>

@if(count($numbers)>0)
Nem üres
@endif

<?php
for($i = 0; $i<5 ;$i++){
echo $i;
}

?>
<br>
@for($i =0; $i < 10; $i++)

{{$i}}
$endfor