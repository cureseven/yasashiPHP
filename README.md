### やさしいPHP
写経するだけ．

### 不明点
6/Sample10.php：while文がなんで回るのか


### memo
`var_dump($変数名);`：変数の型と値を出力  

#### 4-6
phpタグを分けたif文  

#### 4-9
`条件 ? trueの時の式 : falseの時の式`  
$msg = ($num > 0) ? "在庫があります．" : "在庫がありません．";  

#### 5-5
end
```
for($i= 0; $i=5; $i++):
  ・・・
  ・・・  
endfor;
```
```
while($i<5):
  ・・・
  ・・・
endwhile;
```
```
switch($num):
  ・・・
  ・・・
endswitch;
```
#### 6-3
keyを扱うforeach文
```
foreach ($stock as $name => $value) {
  print "<tr><td>{$name}</td><td>{$value}個</td></tr>\n";
}
```
```
foreach ($配列名 as $キー用の変数 => $値用の変数) {
  ・・・
}
```
$キー用の変数，$値用の変数はforeach内で扱うための変数．for中のiみたいなもん．