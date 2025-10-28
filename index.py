n=int(input())
s=list(map(int,input().split()))
d=sum(s)
while d%10==0:
    if  d-min(s)%10!=0:
        print(d-min(s))
        break
    else:
        s.remove(min(s))
print(s)