def Formate_(n):
    """Add commas at thousand position in a number and return it as a string."""
    s = str(n)          # Converting to string to treat it as an array
    r = len(s)          # For loop condition
    e = r//3            # Approximate no. of commas required
    x = ''              # When commas are added then store the array in a string
    a = [0]*(r + e)     # r is the length of number and e is the number of commas
    i = -1              # As commas are added from counting from last so reverse counting  is started
    j = -1              # i is for array and j is for string of number
    while j >= -r:
        if abs(i) % 4 == 0:
            a[i] = ','
            i = i - 1
        else:
            a[i] = s[j]
            i -= 1
            j -= 1

    b = 0           # Removing extra zeroes at the beginning.
    while b < len(a):
        if a[b] != 0:
            x = x + a[b]
        b = b + 1
    return x

print(Formate_(1234567892849023984409238090))
print(Formate_.__doc__)