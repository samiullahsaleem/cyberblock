function titleCase(str) {
    var words = str.split(" ");
    var newWords = [];
    for (var i = 0; i < words.length; i++) {
        var word = words[i];
        var newWord = word[0].toUpperCase() + word.slice(1).toLowerCase();
        newWords.push(newWord);
    }
    return newWords.join(" ");
}




titleCase("I'm a little tea pot");