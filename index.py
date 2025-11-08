a = input()
d = 0
for i in a:
    if i == "a" or i == "d" or i == "j" or i == "g" or i == "m" or i == "p" or i == "t" or i == "w" or i == " ":
        d += 1
    elif i == "b" or i == "e" or i == "h" or i == "k" or i == "n" or i == "q" or i == "r" or i == "x":
        d += 2
    elif i == "c" or i == "f" or i == "l" or i == "o" or i == "r" or i == "v" or i == "y" or i == "i":
        d += 3
    else:
        d += 4
print(d)