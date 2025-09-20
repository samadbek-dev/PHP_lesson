a=int(input())
b=str(a)
c=0
for i in b:
  c+=int(i)
if c%2==0:
  print("no")
else:
  print("yes")