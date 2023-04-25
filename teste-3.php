<?php
function maior_subsequencia_magica(string $s): int {
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    $n = strlen($s);
    $dp = 0;
    $vogal = 0;
    for ($i = 0; $i < $n; $i++) {
        if (in_array($s[$i], $vogais)) {
            if ($s[$i] === $vogais[$vogal]) {
                $dp++;
                $vogal = ($vogal + 1) % 5;
            } else {
                $vogal = 0;
            }
        }
    }
    // Adiciona a última subsequência mágica, se existir
    if ($vogal > 0) {
        $dp -= $vogal;
    }
    return $dp;
}
// Caso de teste 01
$s = "aeiaaioooaauuaeiou";
echo maior_subsequencia_magica($s); // saída: 10
echo "\t";
// Caso de teste 02
$s = "aeiaaioooaa";
echo maior_subsequencia_magica($s); // saída: 7
echo "\t";
// Caso de teste 03
$s = "uioieeeaouiiuaeeuuiuuauuauaeaeuauaeaaiuoiouaeuiuuoooaeeaioeieoeooaeuooae";
echo maior_subsequencia_magica($s); // saída: 13
echo "\t";
// Caso de teste 04
$s = "iaaieeeoaueuaaaaieaooiiuiaueeoauiueuaeiaouiueoouaeeioeieoeeiiiouiaioiaeeaaaeaouiioiueuoieeoeoiuuuouiaoea
aeeeiueuiueiaieuoueoeooiuoooiooouuuoiuoeiuaouoeaaaiaeueaiaeouuaeioeoaeeuuaeouiauaiaoioueeiauuieouoe
uoiiooauoeaoieuieiaooaaieuoauueoeueeauuaaueeeeeoooouueoiaauooioioaeiiuaiueeoaeiuiaouieiueuae";
echo maior_subsequencia_magica($s); // saída: 67

// Caso de teste 05
$s = "ioeueooeuieoaioeoooiioieueoaiieaeaoeioiiaueueiououeiueeaaueeueaeoaaaouoeoieouaauooeuuoeauuaauaeoee
uiueeeuiieooeuaooeiaeueaaaaiooeaoiiiaaaooeiioaiiieieauaoeuiiueuioouuaoaioeiaiaaaaoeeaiuiaeoiiuauiiaeiuuaoa
eaaaaeoeueieoaaaooueioaauieieouoeouieaueuuaiiueoouioueuaaauaoeueuoouieuuouuoueoaaeuuouueieuouiooa
iuaoeuaeiaueuuieeiuaaeuiuuiuoiaiaeauuuaeeuuuuoieoieuaoiiuoeiaeaeeauoueaiuooiaoaiuoouoeeueeuaoeueiaiioi
ouueeaaoeoeauouuieeoaoioauieeeieeaaiuiaaeiaeueuouuaoaoiiaoeoaoeuieeouiiiiauauueaeouaeeeaoeaaaeouuue
oeoiueeoeiouaoeaaeeoaeaiiuouoaaeiuaiaeueuauaoauueuoeueueauuuueeeeuaouaaueaiouoeuooeiouoiiiueauaua
euaauuoeuoaeeouoouoeeeoieoaouiaaioiuoeuaaouuiioieoiiaueueuieouaiioeuaeoeieaoeiuooueeoeuueueioaoaauo
ooiiueueooeuouauuaiuiaoieeeeoouoeiaaaeieiooeouioeuooeeiauouueiuieaeaieeooaoeiuu";

echo maior_subsequencia_magica($s); // saída: 175