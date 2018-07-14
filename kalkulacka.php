<?php
function pocitej($cisA, $cisB, $operace)   //funkce pro výpočet
{
switch($operace) {          //operace = ?
      case "+" : //sčítání
        $vysledek = $cisA + $cisB;    //součet
        break;
      case "-" :  //rozdíl
        $vysledek = $cisA - $cisB;     //odečti
        break;
      case "*" : //sočin
        $vysledek = $cisA * $cisB; //vynásob
        break;
      case "/" :                            //děleno
        if($cisB != 0)                              //není číslo b 0?
          $vysledek = $cisA / $cisB;                   //pokud neni : vyděl
        else                                                               //když je b = 0
          $vysledek = "Dělení nulou!";                                      //vypiš zprávu
        break;
    }
  return $vysledek;                    //vrátit výsledek
}
if($_POST) {     //odeslání formuláře
  if(isset($_POST['cisA']) && isset($_POST['cisB'])) {     //kontrola vyplnění
    $cisA = trim(htmlspecialchars($_POST['cisA']));       //číslo A
    $cisB = trim(htmlspecialchars($_POST['cisB']));       //číslo B
    $operace  = $_POST['operace'];                        //operace
    $vysledek = pocitej($cisA, $cisB, $operace);          //do prm. výsledek uložit návratovou hodnotu z funkce pocitej 
  }
  else {
    $vysledek = "Vyplňte obě pole!";              //pokud neni vyplněné pole vypiš hlášku
  }
}
?>

    <h4>Kalkulačka | +,-,*,/</h4>
    <form method="post" action="#">
      </label><input type="number" name="cisA" maxlength="4" value="<?php if(isset($_POST['cisA'])) : echo $_POST['cisA']; endif; ?>" />
      <select name="operace">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
      </select>
      <input type="number" name="cisB" maxlength="4" value="<?php if(isset($_POST['cisA'])) : echo $_POST['cisA']; endif; ?>" />
      <input type="submit"  value="="/>
      <output><?php if(isset($vysledek)) : echo $vysledek; endif; ?></output>
    </form>
