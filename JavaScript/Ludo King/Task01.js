class Dice {
    type = 1;
    count = 0;
    r = new Red();
    g = new Green();
    y = new Yellow();
    b = new Blue();
    rctns = new Array();
    gctns = new Array();
    yctns = new Array();
    bctns = new Array();
    roll() {
        if (roll.type == 1) {
            msg.innerHTML = "Red";
            msg.style.color = "Red";
        }
        if (roll.type == 2) {
            msg.innerHTML = "Green";
            msg.style.color = "Green";
        }
        if (roll.type == 3) {
            msg.innerHTML = "Yellow";
            msg.style.color = "rgb(255, 200, 0)";
        }
        if (roll.type == 4) {
            msg.innerHTML = "Blue";
            msg.style.color = "Blue";
        }
        this.count = Math.floor(Math.random() * 6 + 1);
        if (this.count == 1) {
            document.getElementById("die").style.backgroundImage = 'url("src/1.png")';
        }
        if (this.count == 2) {
            document.getElementById("die").style.backgroundImage = 'url("src/2.png")';
        }
        if (this.count == 3) {
            document.getElementById("die").style.backgroundImage = 'url("src/3.png")';
        }
        if (this.count == 4) {
            document.getElementById("die").style.backgroundImage = 'url("src/4.png")';
        }
        if (this.count == 5) {
            document.getElementById("die").style.backgroundImage = 'url("src/5.png")';
        }
        if (this.count == 6) {
            document.getElementById("die").style.backgroundImage = 'url("src/6.png")';
        }
        if (this.type == 1) {
            if (this.r.checker()) {
                document.getElementById("die").disabled = true;
            }
            this.rctns.push(this.count);
            this.bctns.splice(0, this.bctns.length);
            this.yctns.splice(0, this.yctns.length);
            this.gctns.splice(0, this.gctns.length);
            if (this.count != 6) {
                this.type++;
            }
            console.log("Red");
        }
        else if (this.type == 2) {
            if (this.g.checker()) {
                document.getElementById("die").disabled = true;
            }
            this.gctns.push(this.count);
            this.rctns.splice(0, this.rctns.length);
            this.bctns.splice(0, this.bctns.length);
            this.yctns.splice(0, this.yctns.length);
            if (this.count != 6) {
                this.type++;
            }
            console.log("Green");
        }
        else if (this.type == 3) {
            if (this.y.checker()) {
                document.getElementById("die").disabled = true;
            }
            this.yctns.push(this.count);
            this.rctns.splice(0, this.rctns.length);
            this.bctns.splice(0, this.bctns.length);
            this.gctns.splice(0, this.gctns.length);
            if (this.count != 6) {
                this.type++;
            }
            console.log("Yellow");
        }
        else if (this.type == 4) {
            if (this.b.checker()) {
                document.getElementById("die").disabled = true;
            }
            this.bctns.push(this.count);
            this.rctns.splice(0, this.rctns.length);
            this.yctns.splice(0, this.yctns.length);
            this.gctns.splice(0, this.gctns.length);
            if (this.count != 6) {
                this.type = 1;
            }
            console.log("Blue");
        }
    }
}
class Red_g {

    j = 0;
    move = 0;
    home = true;
    return = false;
    constructor(G_NO) {
        this.G_NO = G_NO;
    }
}
class Green_g {

    j = 0;
    move = 0;
    home = true;
    constructor(G_NO) {
        this.G_NO = G_NO;
    }
}
class Yellow_g {

    j = 0;
    move = 0;
    home = true;
    constructor(G_NO) {
        this.G_NO = G_NO;
    }
}
class Blue_g {

    j = 0;
    move = 0;
    home = true;
    constructor(G_NO) {
        this.G_NO = G_NO;
    }
}
var R1 = new Red_g(document.getElementById('r1'));
var R2 = new Red_g(document.getElementById('r2'));
var R3 = new Red_g(document.getElementById('r3'));
var R4 = new Red_g(document.getElementById('r4'));
class Red {

    cnt = 0;
    y = null;
    a = 0;
    x = null;
    mover(RN, count) {
        this.y = RN.G_NO;
        console.log("Check:" + (RN.move + count));
        if (RN.move + count < 57) {
            if (RN.j != 0 && RN.home == false) {
                count = count + RN.j;
                for (let i = RN.j; i <= count; i++) {
                    this.a++;
                    setTimeout(this.movefunc(i, RN.move), 1000 * this.a);
                    RN.move++;
                }
                RN.move--;
                RN.j = count;
                this.killcheck(count);
                this.a = 0;
                return true;
            }
            else {
                if (count == 6) {
                    this.x = document.getElementById(1);
                    this.x.appendChild(this.y);
                    RN.j = 1;
                    RN.home = false;
                    return true;
                }
            }
        }
    }
    movefunc(i, move) {
        if (move >= 51) {
            if (i == 57) {
                this.x = document.getElementById("out");
            }
            else {
                var jn = "rf" + i;
                this.x = document.getElementById(jn);
            }
        }
        else {
            this.x = document.getElementById(i);
        }
        this.x.appendChild(this.y);
    }
    choose(i) {
        var ck;
        if (roll.rctns.length != 0) {
            if (i == 1) {
                if (this.mover(R1, roll.rctns[this.cnt])) {
                    ck = true;
                }
                else {
                    ck = false;
                }
            }
            else if (i == 2) {
                if (this.mover(R2, roll.rctns[this.cnt])) {
                    ck = true;
                }
                else {
                    ck = false;
                }
            }
            else if (i == 3) {
                if (this.mover(R3, roll.rctns[this.cnt])) {
                    ck = true;
                }
                else {
                    ck = false;
                }
            }
            else if (i == 4) {
                if (this.mover(R4, roll.rctns[this.cnt])) {
                    ck = true;
                }
                else {
                    ck = false;
                }
            }
            console.log("Moved:" + ck);
            if (ck) {
                if ((this.cnt == roll.rctns.length - 1)) {
                    console.log("last");
                    document.getElementById("die").disabled = false;
                    roll.rctns.splice(0, roll.rctns.length);
                    this.cnt = 0;
                }
                else {
                    console.log("not last");
                    this.cnt++;
                }
            }
        }
    }
    checker() {
        if (R1.home && R2.home && R3.home && R4.home && roll.count != 6 && roll.rctns[roll.rctns.length - 1] != 6) {
            return false;
        }
        else {
            if (roll.count == 6) {
                return false;
            }
            else {
                return true;
            }
        }
    }
    killcheck(j) {
        if (j != 22 && j != 27 && j != 14 && j != 9 && j != 40 && j != 35 && j != 48 && j != 1) {
            if (j == G1.j) {
                G1.j = 0;
                G1.home = true;
                G1.move = 0;
                document.getElementById('g_g1').appendChild(G1.G_NO);
                roll.type--;
            }
            if (j == G2.j) {
                G2.j = 0;
                G2.home = true;
                G2.move = 0;
                document.getElementById('g_g2').appendChild(G2.G_NO);
                roll.type--;
            }
            if (j == G3.j) {
                G3.j = 0;
                G3.home = true;
                G3.move = 0;
                document.getElementById('g_g3').appendChild(G3.G_NO);
                roll.type--;
            }
            if (j == G4.j) {
                G4.j = 0;
                G4.home = true;
                G4.move = 0;
                document.getElementById('g_g4').appendChild(G4.G_NO);
                roll.type--;
            }
            if (j == Y1.j) {
                Y1.j = 0;
                Y1.home = true;
                Y1.move = 0;
                document.getElementById('g_y1').appendChild(Y1.G_NO);
                roll.type--;
            }
            if (j == Y2.j) {
                Y2.j = 0;
                Y2.home = true;
                Y2.move = 0;
                document.getElementById('g_y2').appendChild(Y2.G_NO);
                roll.type--;
            }
            if (j == Y3.j) {
                Y3.j = 0;
                Y3.home = true;
                Y3.move = 0;
                document.getElementById('g_y3').appendChild(Y3.G_NO);
                roll.type--;
            }
            if (j == Y4.j) {
                Y4.j = 0;
                Y4.home = true;
                Y4.move = 0;
                document.getElementById('g_y4').appendChild(Y4.G_NO);
                roll.type--;
            }
            if (j == B1.j) {
                B1.j = 0;
                B1.home = true;
                B1.move = 0;
                document.getElementById('g_b1').appendChild(B1.G_NO);
                roll.type--;
            }
            if (j == B2.j) {
                B2.j = 0;
                B2.home = true;
                B2.move = 0;
                document.getElementById('g_b2').appendChild(B2.G_NO);
                roll.type--;
            }
            if (j == B3.j) {
                B3.j = 0;
                B3.home = true;
                B3.move = 0;
                document.getElementById('g_b3').appendChild(B3.G_NO);
                roll.type--;
            }
            if (j == B4.j) {
                B4.j = 0;
                B4.home = true;
                B4.move = 0;
                document.getElementById('g_b4').appendChild(B4.G_NO);
                roll.type--;
            }
        }
    }
}
var B1 = new Blue_g(document.getElementById('b1'));
var B2 = new Blue_g(document.getElementById('b2'));
var B3 = new Blue_g(document.getElementById('b3'));
var B4 = new Blue_g(document.getElementById('b4'));
class Blue {
    cnt = 0;
    y = null;
    a = 0;
    x = null;
    mover(RN, count) {
        console.log("Check:" + (RN.move + count));
        this.y = RN.G_NO;
        if (RN.move + count < 57) {
            if (RN.j != 0 && RN.home == false) {
                count = count + RN.j;
                for (let i = RN.j; i <= count; i++) {
                    if (i == 53) {
                        count = count - i + 1;
                        RN.j = 1;
                        i = 1;
                    }
                    this.a++;
                    setTimeout(this.movefunc(i, RN.move), 1000 * this.a);
                    RN.move++;
                }
                RN.move--;
                RN.j = count;
                this.killcheck(count);
                this.a = 0;
                return true;
            }
            else {
                if (count == 6) {
                    this.x = document.getElementById(40);
                    this.x.appendChild(this.y);
                    RN.j = 40;
                    RN.home = false;
                    return true;
                }
            }
        }
    }
    movefunc(i, move) {
        if (move >= 51) {
            if (i == 44) {
                this.x = document.getElementById("out");
            }
            else {
                var jn = "bf" + i;
                this.x = document.getElementById(jn);
            }
        }
        else {
            this.x = document.getElementById(i);
        }
        this.x.appendChild(this.y);
    }
    choose(i) {
        var ck;
        if (roll.bctns.length != 0) {
            if (i == 1) {
                if (this.mover(B1, roll.bctns[this.cnt])) {
                    ck = true;
                }
                else {
                    ck = false;
                }
            }
            else if (i == 2) {
                if (this.mover(B2, roll.bctns[this.cnt])) {
                    ck = true;
                }
                else {
                    ck = false;
                }
            }
            else if (i == 3) {
                if (this.mover(B3, roll.bctns[this.cnt])) {
                    ck = true;
                }
                else {
                    ck = false;
                }
            }
            else if (i == 4) {
                if (this.mover(B4, roll.bctns[this.cnt])) {
                    ck = true;
                }
                else {
                    ck = false;
                }
            }
            console.log(ck);
            if (ck) {
                if ((this.cnt == roll.bctns.length - 1)) {
                    document.getElementById("die").disabled = false;
                    roll.bctns.splice(0, roll.bctns.length);
                    this.cnt = 0;
                }
                else {
                    this.cnt++;
                }
            }
        }
    }
    checker() {
        if (B1.home && B2.home && B3.home && B4.home && roll.count != 6 && roll.bctns[roll.bctns.length - 1] != 6) {
            return false;
        }
        else {
            if (roll.count == 6) {
                return false;
            }
            else {
                return true;
            }
        }
    }
    killcheck(j) {
        if (j != 22 && j != 27 && j != 14 && j != 9 && j != 40 && j != 35 && j != 48 && j != 1) {
            if (j == G1.j) {
                G1.j = 0;
                G1.home = true;
                G1.move = 0;
                document.getElementById('g_g1').appendChild(G1.G_NO);
                roll.type = 4;
            }
            if (j == G2.j) {
                G2.j = 0;
                G2.home = true;
                G2.move = 0;
                document.getElementById('g_g2').appendChild(G2.G_NO);
                roll.type = 4;
            }
            if (j == G3.j) {
                G3.j = 0;
                G3.home = true;
                G3.move = 0;
                document.getElementById('g_g3').appendChild(G3.G_NO);
                roll.type = 4;
            }
            if (j == G4.j) {
                G4.j = 0;
                G4.home = true;
                G4.move = 0;
                document.getElementById('g_g4').appendChild(G4.G_NO);
                roll.type = 4;
            }
            if (j == Y1.j) {
                Y1.j = 0;
                Y1.home = true;
                Y1.move = 0;
                document.getElementById('g_y1').appendChild(Y1.G_NO);
                roll.type = 4;
            }
            if (j == Y2.j) {
                Y2.j = 0;
                Y2.home = true;
                Y2.move = 0;
                document.getElementById('g_y2').appendChild(Y2.G_NO);
                roll.type = 4;
            }
            if (j == Y3.j) {
                Y3.j = 0;
                Y3.home = true;
                Y3.move = 0;
                document.getElementById('g_y3').appendChild(Y3.G_NO);
                roll.type = 4;
            }
            if (j == Y4.j) {
                Y4.j = 0;
                Y4.home = true;
                Y4.move = 0;
                document.getElementById('g_y4').appendChild(Y4.G_NO);
                roll.type = 4;
            }
            if (j == R1.j) {
                R1.j = 0;
                R1.home = true;
                R1.move = 0;
                document.getElementById('g_r1').appendChild(R1.G_NO);
                roll.type = 4;
            }
            if (j == R2.j) {
                R2.j = 0;
                R2.home = true;
                R2.move = 0;
                document.getElementById('g_r2').appendChild(R2.G_NO);
                roll.type = 4;
            }
            if (j == R3.j) {
                R3.j = 0;
                R3.home = true;
                R3.move = 0;
                document.getElementById('g_r3').appendChild(R3.G_NO);
                roll.type = 4;
            }
            if (j == R4.j) {
                R4.j = 0;
                R4.home = true;
                R4.move = 0;
                document.getElementById('g_r4').appendChild(R4.G_NO);
                roll.type = 4;
            }
        }
    }
}
var G1 = new Green_g(document.getElementById('g1'));
var G2 = new Green_g(document.getElementById('g2'));
var G3 = new Green_g(document.getElementById('g3'));
var G4 = new Green_g(document.getElementById('g4'));
class Green {
    cnt = 0;
    y = null;
    a = 0;
    x = null;
    mover(RN, count) {
        console.log("Check:" + (RN.move + count));
        this.y = RN.G_NO;
        if (RN.move + count < 57) {
            if (RN.j != 0 && RN.home == false) {
                count = count + RN.j;
                for (let i = RN.j; i <= count; i++) {
                    if (i == 53) {
                        count = count - i + 1;
                        RN.j = 1;
                        i = 1;
                    }
                    this.a++;
                    setTimeout(this.movefunc(i, RN.move), 1000 * this.a);
                    RN.move++;
                }
                RN.move--;
                RN.j = count;
                this.killcheck(count);
                this.a = 0; 
                return true;
            }
            else {
                if (count == 6) {
                    this.x = document.getElementById(14);
                    this.x.appendChild(this.y);
                    RN.j = 14;
                    RN.home = false;
                    return true;
                }
            }
        }
    }
    movefunc(i, move) {
        if (move >= 51) {
            if (i == 18) {
                this.x = document.getElementById("out");
            }
            else {
                var jn = "gf" + i;
                this.x = document.getElementById(jn);
            }
        }
        else {
            this.x = document.getElementById(i);
        }
        this.x.appendChild(this.y);
    }
    choose(i) {
        var ck;
        if (roll.gctns.length != 0) {
            if (i == 1) {
                if (this.mover(G1, roll.gctns[this.cnt])) {
                    ck = true;
                }
                else {
                    ck = false;
                }
            }
            else if (i == 2) {
                if (this.mover(G2, roll.gctns[this.cnt])) {
                    ck = true;
                }
                else {
                    ck = false;
                }
            }
            else if (i == 3) {
                if (this.mover(G3, roll.gctns[this.cnt])) {
                    ck = true;
                }
                else {
                    ck = false;
                }
            }
            else if (i == 4) {
                if (this.mover(G4, roll.gctns[this.cnt])) {
                    ck = true;
                }
                else {
                    ck = false;
                }
            }
            console.log(ck);
            if (ck) {
                if ((this.cnt == roll.gctns.length - 1)) {
                    document.getElementById("die").disabled = false;
                    roll.gctns.splice(0, roll.gctns.length);
                    this.cnt = 0;
                }
                else {
                    this.cnt++;
                }
            }
        }
    }
    checker() {
        if (G1.home && G2.home && G3.home && G4.home && roll.count != 6 && roll.gctns[roll.gctns.length - 1] != 6) {
            return false;
        }
        else {
            if (roll.count == 6) {
                return false;
            }
            else {
                return true;
            }
        }
    }
    killcheck(j) {
        if (j != 22 && j != 27 && j != 14 && j != 9 && j != 40 && j != 35 && j != 48 && j != 1) {
            if (j == R1.j) {
                R1.j = 0;
                R1.home = true;
                R1.move = 0;
                document.getElementById('g_r1').appendChild(R1.G_NO);
                roll.type--;
            }
            if (j == R2.j) {
                R2.j = 0;
                R2.home = true;
                R2.move = 0;
                document.getElementById('g_r2').appendChild(R2.G_NO);
                roll.type--;
            }
            if (j == R3.j) {
                R3.j = 0;
                R3.home = true;
                R3.move = 0;
                document.getElementById('g_r3').appendChild(R3.G_NO);
                roll.type--;
            }
            if (j == R4.j) {
                R4.j = 0;
                R4.home = true;
                R4.move = 0;
                document.getElementById('g_r4').appendChild(R4.G_NO);
                roll.type--;
            }
            if (j == Y1.j) {
                Y1.j = 0;
                Y1.home = true;
                Y1.move = 0;
                document.getElementById('g_y1').appendChild(Y1.G_NO);
                roll.type--;
            }
            if (j == Y2.j) {
                Y2.j = 0;
                Y2.home = true;
                Y2.move = 0;
                document.getElementById('g_y2').appendChild(Y2.G_NO);
                roll.type--;
            }
            if (j == Y3.j) {
                Y3.j = 0;
                Y3.home = true;
                Y3.move = 0;
                document.getElementById('g_y3').appendChild(Y3.G_NO);
                roll.type--;
            }
            if (j == Y4.j) {
                Y4.j = 0;
                Y4.home = true;
                Y4.move = 0;
                document.getElementById('g_y4').appendChild(Y4.G_NO);
                roll.type--;
            }
            if (j == B1.j) {
                B1.j = 0;
                B1.home = true;
                B1.move = 0;
                document.getElementById('g_b1').appendChild(B1.G_NO);
                roll.type--;
            }
            if (j == B2.j) {
                B2.j = 0;
                B2.home = true;
                B2.move = 0;
                document.getElementById('g_b2').appendChild(B2.G_NO);
                roll.type--;
            }
            if (j == B3.j) {
                B3.j = 0;
                B3.home = true;
                B3.move = 0;
                document.getElementById('g_b3').appendChild(B3.G_NO);
                roll.type--;
            }
            if (j == B4.j) {
                B4.j = 0;
                B4.home = true;
                B4.move = 0;
                document.getElementById('g_b4').appendChild(B4.G_NO);
                roll.type--;
            }
        }
    }
}
var Y1 = new Yellow_g(document.getElementById('y1'));
var Y2 = new Yellow_g(document.getElementById('y2'));
var Y3 = new Yellow_g(document.getElementById('y3'));
var Y4 = new Yellow_g(document.getElementById('y4'));
class Yellow {
    cnt = 0;
    y = null;
    a = 0;
    x = null;
    mover(RN, count) {
        console.log("Check:" + (RN.move + count));
        this.y = RN.G_NO;
        if (RN.move + count < 57) {
            if (RN.j != 0 && RN.home == false) {
                count = count + RN.j;
                for (let i = RN.j; i <= count; i++) {
                    if (i == 53) {
                        count = count - i + 1;
                        RN.j = 1;
                        i = 1;
                    }
                    this.a++;
                    setTimeout(this.movefunc(i, RN.move), 1000 * this.a);
                    RN.move++;
                }
                RN.move--;
                RN.j = count;
                this.killcheck(count);
                this.a = 0;
                return true;
            }
            else {
                if (count == 6) {
                    this.x = document.getElementById(27);
                    this.x.appendChild(this.y);
                    RN.j = 27;
                    RN.home = false;
                    return true;
                }
            }
        }
    }
    movefunc(i, move) {
        if (move >= 51) {
            if (i == 31) {
                this.x = document.getElementById("out");
            }
            else {
                var jn = "yf" + i;
                this.x = document.getElementById(jn);
            }
        }
        else {
            this.x = document.getElementById(i);
        }
        this.x.appendChild(this.y);
    }
    choose(i) {
        var ck;
        if (roll.yctns.length != 0) {
            if (i == 1) {
                if (this.mover(Y1, roll.yctns[this.cnt])) {
                    ck = true;
                }
                else {
                    ck = false;
                }
            }
            else if (i == 2) {
                if (this.mover(Y2, roll.yctns[this.cnt])) {
                    ck = true;
                }
                else {
                    ck = false;
                }
            }
            else if (i == 3) {
                if (this.mover(Y3, roll.yctns[this.cnt])) {
                    ck = true;
                }
                else {
                    ck = false;
                }
            }
            else if (i == 4) {
                if (this.mover(Y4, roll.yctns[this.cnt])) {
                    ck = true;
                }
                else {
                    ck = false;
                }
            }
            console.log(ck);
            if (ck) {
                if ((this.cnt == roll.yctns.length - 1)) {
                    document.getElementById("die").disabled = false;
                    roll.yctns.splice(0, roll.yctns.length);
                    this.cnt = 0;
                }
                else {
                    this.cnt++;
                }
            }
        }
    }
    checker() {
        if (Y1.home && Y2.home && Y3.home && Y4.home && roll.count != 6 && roll.yctns[roll.yctns.length - 1] != 6) {
            return false;
        }
        else {
            if (roll.count == 6) {
                return false;
            }
            else {
                return true;
            }
        }
    }
    killcheck(j) {
        if (j != 22 && j != 27 && j != 14 && j != 9 && j != 40 && j != 35 && j != 48 && j != 1) {
            if (j == G1.j) {
                G1.j = 0;
                G1.home = true;
                G1.move = 0;
                document.getElementById('g_g1').appendChild(G1.G_NO);
                roll.type--;
            }
            if (j == G2.j) {
                G2.j = 0;
                G2.home = true;
                G2.move = 0;
                document.getElementById('g_g2').appendChild(G2.G_NO);
                roll.type--;
            }
            if (j == G3.j) {
                G3.j = 0;
                G3.home = true;
                G3.move = 0;
                document.getElementById('g_g3').appendChild(G3.G_NO);
                roll.type--;
            }
            if (j == G4.j) {
                G4.j = 0;
                G4.home = true;
                G4.move = 0;
                document.getElementById('g_g4').appendChild(G4.G_NO);
                roll.type--;
            }
            if (j == R1.j) {
                R1.j = 0;
                R1.home = true;
                R1.move = 0;
                document.getElementById('g_r1').appendChild(R1.G_NO);
                roll.type--;
            }
            if (j == R2.j) {
                R2.j = 0;
                R2.home = true;
                R2.move = 0;
                document.getElementById('g_r2').appendChild(R2.G_NO);
                roll.type--;
            }
            if (j == R3.j) {
                R3.j = 0;
                R3.home = true;
                R3.move = 0;
                document.getElementById('g_r3').appendChild(R3.G_NO);
                roll.type--;
            }
            if (j == R4.j) {
                R4.j = 0;
                R4.home = true;
                R4.move = 0;
                document.getElementById('g_r4').appendChild(R4.G_NO);
                roll.type--;
            }
            if (j == B1.j) {
                B1.j = 0;
                B1.home = true;
                B1.move = 0;
                document.getElementById('g_b1').appendChild(B1.G_NO);
                roll.type--;
            }
            if (j == B2.j) {
                B2.j = 0;
                B2.home = true;
                B2.move = 0;
                document.getElementById('g_b2').appendChild(B2.G_NO);
                roll.type--;
            }
            if (j == B3.j) {
                B3.j = 0;
                B3.home = true;
                B3.move = 0;
                document.getElementById('g_b3').appendChild(B3.G_NO);
                roll.type--;
            }
            if (j == B4.j) {
                B4.j = 0;
                B4.home = true;
                B4.move = 0;
                document.getElementById('g_b4').appendChild(B4.G_NO);
                roll.type--;
            }
        }
    }
}

var roll = new Dice();
var red = new Red();
var green = new Green();
var yellow = new Yellow();
var blue = new Blue();
var msg = document.getElementById("message")
msg.style.fontSize = "35px";
msg.style.textAlign = "center";