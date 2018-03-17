<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <link rel=stylesheet type=text/css href="style.css">
    <link rel="icon" href="https://apprecs.org/ios/images/app-icons/256/29/1005014313.jpg">
    <title>HS Card Game</title>
</head>

<body onload="getLegendaries()">
    <div id="output">
        <section class="hero is-info">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        Hearthstone Flavor Quiz
                    </h1>
                    <h2 class="subtitle">
                        Guess the card names by their flavor text
                    </h2>
                </div>
            </div>
        </section>
        <section>
            <div class="box thin">
                <h1 class="title is-4">
                    {{ flavor }}
                </h1>
            </div>
            <div class="controls">
                <input id="text" class="input" type="text"><a class="button is-info" v-on:click="guess">Guess</a> <a id="hint" class="button is-warning" v-on:click="getHint">Hint {{ hints.length }}/3 used</a>
                <div v-for="hint in hints">{{ hint }}</div>
            </div>
        </section>
        <section>
            <div v-for="item in guessHistory">
                <div v-bind:class="item.correct">
                    You guessed {{ item.userAnswer }}, the answer was {{ item.trueAnswer }}. You used {{ item.hints }} hint(s).
                </div>
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.15/dist/vue.js"></script>
    <script src="script.js"></script>
</body>

</html>
