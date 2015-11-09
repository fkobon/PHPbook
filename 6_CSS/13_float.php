<html>
<!-- 
13. Есть ячейка таблицы, в ней 3 дива, в каждом диве по слову. На первый див
применен стиль float: left; на третий: float: right; что нужно применить на второй див, чтобы все три надписи/дивы были в одной горизонтальной строке,
т.е. первый имел бы выравнивание по левому краю, третий по правому, а второй по центру?
Можно сделать так:
-->
<t:div style="width:33%; float:left; text-align: left;">AM </t:div>
<t:div style="width:34%; float:left;">NOON </t:div>
<t:div style="width:33%; float:right; text-align: right;">PM </t:div> <!--float:right/left; без разницы-->
</html>