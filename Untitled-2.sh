
#!/bin/bash

x=$1
e=$2

s=0
expo=1

while((x<e))
do
f=x
i=expo
#calcul de l'exposons de x 
while((x<i))
do
x=$((x*x))
i=$((x-1))
done

d=$((x / expo))

let SUM=$s+$d


f=$((f+1))
expo=$((expo+2))
done
echo "$d"