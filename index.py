k,a = map(int,input().split())
s = list(map(int, input().split()))
n = len(s)
total_cuts = 0
for i in range(n-1):
    combined_power = s[i] + s[i+1]
    if combined_power > k:
        points_to_cut = combined_power - k
        total_cuts += points_to_cut
        s[i+1] = max(0, s[i+1] - points_to_cut)
print(total_cuts)