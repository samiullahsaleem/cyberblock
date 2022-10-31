import random


def remove_dots(sent):
    raw = ""
    for i in range(len(sent)):
        if sent[i] != ".":
            raw = raw + sent[i]
    return raw


def remove_word(word, sent):
    raw = ""
    len_word = len(word)
    len_sent = len(sent)
    i = 0
    while i < len(sent) - len(word):
        for j in range(len(word)):
            is_same = True
            if sent[i + j] != word[j]:
                is_same = False
                break
        if i == len_sent - len_word - 1 and is_same != True:
            raw = raw + sent[-len_word - 1:]
        elif not is_same:
            raw = raw + sent[i]
        else:
            i = i + len(word) - 2
        i = i + 1
    return raw


def main():
    words = ["is", "are", "am", "and"]
    sentence = "This is something interesting. We are happy."
    sentence = remove_dots(sentence)
    for i in range(len(words)):
        sentence = remove_word(" " + words[i] + " ", sentence)
    print(sentence)


main()