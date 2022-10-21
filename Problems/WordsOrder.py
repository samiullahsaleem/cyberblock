# Write a function that accepts a string and returns its words in alphabetical order.

def WordsOrd(s):
    """Arrange the words in a string in alphabetical order and return in an array."""
    words = [word.lower() for word in s.split()]
    a = [0]*len(words)
    words.sort()
    b = 0
    for i in words:
        a[b] = i
        b = b + 1
    return a
s = 'Assalam O Alaikum InshaAllah you will be fine soon'
a = WordsOrd(s)
print(a)