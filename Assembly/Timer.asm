.model small
.stack 100h
.data
choice db ?		; user's choice
;--------------------------------------------------fisrt page-----------------------------------------------------
	msg db 09h,09h,09h,'TIMER and its APPLICATIONS'
	L1 db 0Ah,09h,'   ******************************************************'
	L2 db 0Ah,09h,'   *						        *'
	L3 db 0Ah,09h,'   *		1- Stopwatch workig		        *'
	L4 db 0Ah,09h,'   *		2- Quiz Challenge		        *'
	L5 db 0Ah,09h,'   *		3- Current Clock Time		        *'
	L6 db 0Ah,09h,'   *		4- End Program 			        *'
	L7 db 0Ah,09h,'   *						        *'
	L8 db 0Ah,09h,'   ******************************************************$'
	msg5 db 0Ah,0Ah,'Enter your choice: $'
	wrong db ' Invalid input!$'
;--------------------------------------------------data for stopwatch----------------------------------------------
m1 db '1.Start 2.Stop 3.Reset 4.End',0Ah,0Ah,'$'
check db 0AH,'$'
check2 db 4 dup(09h),'$'	;to print 4 tabs
a db 30H,'$'
a1 db 30H,'$'
a2 db 30H,'$'
a3 db 30H,'$'
a4 db 30H,'$'
a5 db 30H,'$'
c1 db ':','$'
dis db 09h,09h,09h,09h,'STOPWATCH$'
;----------------------------------------------------data for Quiz-----------------------------------------------
score db 30h
num db 36h		;total 6 questions
t db 09h,09h,'TIME:',09h,'$'
m11 db 0AH,09h,09h,'..........Welcome to COAL quiz..........',0AH,09h,09h,09h,'......BEST OF LUCK......$'
r db 0AH,0AH,'RULES::'
r1 db 0AH,'1) You have 30 seconds to solve the quiz.' 
r2 db 0Ah,'2) There are 6 Questions & you have to press just correct letter "a b c OR d".'
r3 db 0AH,'3) For every correct answer you will be awarded with 1 point.'
r4 db 0AH,'4) Time will be shown on top of screen.'
r5 db 0AH,'5) Try to solve within time otherwise, Quiz will disappear when Time up.$'

sms db 0AH,0AH,'Press "s" to start the quiz: $'
crct db 0AH,0Ah,'      Right answer.....!$'
incrct db 0AH,0Ah,'      Wrong answer.....!$'
tup db 09h,09h,09h,'Time up.....!$'
msg8 db 0AH,09h,'   .....Congratulations! You completed within time.....$'
msg9 db 0AH,0Ah,09h,09h,09h,'SCORE obtained:: $'
total_time db 0Ah,0Ah,09h,09h,09h,'Time Taken: $'

q1 db 0AH,'Q#1-  In assembly language, we use _ symbol to show comments?',0AH,'      a)@      b);      c)%      d)*$'
q2 db 0AH,'Q#2-  To take character input from user, we use syntax?',0Ah,'      a)MOV AH,1      b)MOV AH,9      c)MOV AH,3      d)MOV AH,5$'
q3 db 0AH,'Q#3-  Which registers we can use as pointers?',0Ah,'      a)BX        b)SI        c)BP          d)All of these$' 
q4 db 0AH,'Q#4-  HEX value of 15 is?',0Ah,'      a)C              b)A              c)F              d)none$'
q5 db 0AH,'Q#5-  Data is stored in memory according to?',0Ah,'      a)Arshmedas principal     b)Little Endian Principal    c)Hygen principal$'
q6 db 0AH,'Q#6-  In assembly language DW=?',0Ah,'      a)4 bytes        b)1 byte        c)2 bytes        d)8 bytes$'
ans db 0Ah,'      Your answer: $'
 
;----------------------------------------data for clock time---------------------------------------------------------------
	v1 db '  AM$'
	v2 db '  PM$'
	count db ?
	m db 09h,09h,09h,'Current Clock Time:',0Ah,0Ah,09h,09h,09h,'   ','$'
	m2 db 0Ah,0Ah,0Ah,'Press "e" to go back: $'
	
;---------------------------------------------------code area finally--------------------------------------------------------------------------	
.code
main proc
	mov ax,@data		; making in a 2D array, table like....
	mov ds,ax

initial:
	mov score,30h		; reset them....
	mov num,36h		; 6 quiz questions...
	mov ah,00		;clear screen
	mov al,02
	int 10h

	mov bx,5		;top lines
	mov ah,2
	mov dl,0Ah
lines:	int 21h
	dec bx
	JNZ lines

;-------------------printing pattern declared in data area
	mov ah,9
	mov dx,offset msg
	int 21h
STOP:	
	mov ah,9
	mov dx,offset msg5
	int 21h
	mov ah,1		; input 1/2/3/4
	int 21h	
	mov choice,al		; choice gets.....		
;------------------check which user wants to do
	cmp al,31h
	JE STOPWATCH
	cmp al,32h
	JE QUIZ
	cmp al,33h
	JE TIME
	cmp al,34h
	JE END_
;------------------if invalid input
	mov ah,9
	mov dx,offset wrong
	int 21h
	jmp STOP

;----------------------------------------------------------------------first option--------------------------------------------------------------------------------
STOPWATCH:
	JMP RESET
again:
;------------to clear screen
mov ah,0h
mov al,2h
int 10h

;----------to center your time
	mov cx,6		;printing lines top
	LEA DX,check
	mov AH,9
LINS:	int 21h
	loop LINS

mov ah,9
mov dx,offset dis		; print 'STOPWATCH'
int 21h
mov dx,offset check		;2 lines prnt
int 21h
int 21h

mov ah,2
mov dl,9			; tabs print
int 21h
int 21h
int 21h
mov ah,9
mov dx,offset m1		; upper message print
int 21h

mov ah,1h 
int 16h
jz NOKEY	;ZF=1 if no keypressed so every time, it prints previous state again and again until some key is pressed....

SOMEKEY:
mov ah, 0h	;If key is pressed here the buffer is cleaned
int 16h

mov bh,al	; just saving AL value to use in future bcz, above statement 'mov ah,1' changes value of whole..ax

cmp al,31h	;start stopwatch
je START

cmp al,32h	;stop on console with same counting
je NOKEY

cmp al,33h	;Else we compare if key is 3 Stop watch Resets
je RESET

cmp al,34h	;Than we compare if key is 4 Stopwatch is turned off
je INITIAL

NOKEY:
;--------------make it center, print long space
LEA DX,check2
MOV AH,9
INT 21h 

;--------------print first digit of hours
LEA DX,a5
MOV AH,9
INT 21h 

;--------------print second digit of hours
LEA DX,a4
MOV AH,9
INT 21h 

;--------------print colon
LEA DX,c1
MOV AH,9
INT 21h 

;--------------print first digit of mins
LEA DX,a3
MOV AH,9
INT 21h 

;--------------print second digit of mins
LEA DX,a2
MOV AH,9
INT 21h 

;--------------print colon
LEA DX,c1
MOV AH,9
INT 21h

;--------------print first digit of seconds 
LEA DX,a1
MOV AH,9
INT 21h 

;--------------print second digit of seconds
LEA DX,a
MOV AH,9
INT 21h 

;------------------------------------making a second
;here we are iterating these instructions 1000*3000=3000000  huuuuuuuuuu

mov di,1000
PASS1:
mov cx,3000
;------3000 times this loop work
PASS2:
loop PASS2
;------
DEC di
JNZ PASS1

cmp bh,31h		; continues if stopwatch running..... pressing 1-start
je START
JMP again		; previous stage prints else
;---------------------------------------------------------------

START:			;-------------- a5 a4 : a3 a2 : a1 a ---------------------
cmp a,39H
JE SEC1

inc a
JMP again

SEC1:
mov a,30H      ;second is made again 0
inc a1         ;1 increase in second digit
cmp a1,36H
JE MIN1
JMP again

MIN1:  
mov a1,30h
inc a2
cmp a2,3Ah	; check here for 9,19,29,39....minut...
je MIN2
JMP again

MIN2:
mov a2,30H
inc a3
cmp a3,36H	; check for 60 mint=1 hour
JE HRS1
JMP again

HRS1:
mov a3,30h
inc a4
cmp a4,3AH
JE HRS2
JMP again

HRS2:
mov a4,30H
inc a5
cmp a5,3Ah		;----------------timer can count maximum 100 hours= 99:59:59, so reset at that point......
je RESET
JMP again

RESET:
mov a,30h
mov a1,30h
mov a2,30h
mov a3,30h
mov a4,30h
mov a5,30h
cmp choice,32h		; quiz timinig
je QUIZMOV
JMP again		; else, to stopwatch

;-------------------------------------------------------------------2nd option:Quiz-----------------------------------------------------------------	
QUIZ:	
	jmp RESET
QUIZMOV:
;--------------to clear screen
mov ah,00		
mov al,02
int 10h
;--------------wecome message
LEA DX,m11
MOV AH,9
INT 21H
;---------------rules
LEA DX,r		
MOV AH,9
INT 21h
;--------------press 's' to start quiz	
REINPUT:	
LEA DX,sms  
MOV AH,9
INT 21H
;-------------input 's'
MOV AH,1		
INT 21H
cmp al,'s'
je STRTQZ_
;-------------if invalid input
mov ah,9	
mov dx,offset wrong
int 21h
jmp REINPUT

;------------------------------start quiz---------------
STRTQZ_:

;------------------------------------------------------------quiz time starts now-------------------------------------
prnt:
;------------------------to clear screen
mov ah,00		
mov al,02
int 10h

mov ah,9
mov dx,offset check	; 2 line print
int 21h
int 21h
;--------time print-----------
;--------------time print
LEA DX,t
MOV AH,9
INT 21h 

;--------------print first digit of hours
LEA DX,a5
MOV AH,9
INT 21h 

;--------------print second digit of hours
LEA DX,a4
MOV AH,9
INT 21h 

;--------------print colon
LEA DX,c1
MOV AH,9
INT 21h 

;--------------print first digit of mins
LEA DX,a3
MOV AH,9
INT 21h 

;--------------print second digit of mins
LEA DX,a2
MOV AH,9
INT 21h 

;--------------print colon
LEA DX,c1
MOV AH,9
INT 21h

;--------------print first digit of seconds 
LEA DX,a1
MOV AH,9
INT 21h 

;--------------print second digit of seconds
LEA DX,a
MOV AH,9
INT 21h 
;--------------
mov ah,9
mov dx,offset check	; 2 line print
int 21h
int 21h
;--=-------------print question...
jmp QUESTIONS_

NEXT_TIME:
;---------------making a second------------------
mov di,1000
P1:
mov cx,3000
P2:loop P2
DEC di
JNZ P1
;----------------------------------------------
cmp a,39H
JE S2

inc a
JMP prnt

S2:
mov a,30H      ;second is made again 0
inc a1         ;1 increase in second digit
cmp a1,33h	;-----------TIME UP!-------------
je ENDQUIZZ
JMP prnt
;-------------------------no need to check more time bcz, quiz will end at 30sec--------------


;------------now, print questions of quiz----------------
QUESTIONS_:	
;--------------print relevent question according to iteration

cmp num,36h
je Q1_
cmp num,35h
je Q2_
cmp num,34h
je Q3_
cmp num,33h
je Q4_
cmp num,32h
je Q5_
cmp num,31h
je Q6_

QUIZZ:
dec num

;----------------------next iteration
cmp num,30h
jne NEXT_TIME
jmp ENDQUIZZ			; when loop ends....


;--------------------------------------------Q#1
q1_: 
LEA DX,q1   
MOV AH,9
INT 21H
;------------asking to input answer
mov dx,offset ans	
int 21h
mov ah,1				; if no key pressed, again print time and same question...
int 16h
jz NEXT_TIME				
mov ah,0h				; clear buffer if key pressed
int 16h
;------------check right/wrong answer
mov ah,2
mov dl,al				; printing answer bcz "int 16h" doesn't print input
int 21h
cmp al,'b'
je HERE
jmp THERE

;--------------------------------------------Q#2
q2_:
LEA DX,q2   
MOV AH,9
INT 21H
;------------asking to input answer
mov dx,offset ans	
int 21h
mov ah,1				; if no key pressed, again print time and same question...
int 16h
jz NEXT_TIME				
mov ah,0h				; clear buffer if key pressed
int 16h
;------------check right/wrong answer
mov ah,2
mov dl,al				; printing answer bcz "int 16h" doesn't print input
int 21h
cmp al,'a'
je HERE
jmp THERE

;--------------------------------------------Q#3
q3_:
LEA DX,q3   
MOV AH,9
INT 21H
;------------asking to input answer
mov dx,offset ans	
int 21h
mov ah,1				; if no key pressed, again print time and same question...
int 16h
jz NEXT_TIME				
mov ah,0h				; clear buffer if key pressed
int 16h
;------------check right/wrong answer
mov ah,2
mov dl,al				; printing answer bcz "int 16h" doesn't print input
int 21h
cmp al,'d'
je HERE
jmp THERE

;--------------------------------------------Q#4
q4_:
LEA DX,q4   
MOV AH,9
INT 21H
;------------asking to input answer
mov dx,offset ans	
int 21h
mov ah,1				; if no key pressed, again print time and same question...
int 16h
jz NEXT_TIME				
mov ah,0h				; clear buffer if key pressed
int 16h
;------------check right/wrong answer
mov ah,2
mov dl,al				; printing answer bcz "int 16h" doesn't print input
int 21h
cmp al,'c'
je HERE
jmp THERE

;--------------------------------------------Q#5
q5_:
LEA DX,q5   
MOV AH,9
INT 21H
;------------asking to input answer
mov dx,offset ans	
int 21h
mov ah,1				; if no key pressed, again print time and same question...
int 16h
jz NEXT_TIME				
mov ah,0h				; clear buffer if key pressed
int 16h
;------------check right/wrong answer
mov ah,2
mov dl,al				; printing answer bcz "int 16h" doesn't print input
int 21h
cmp al,'b'
je HERE
jmp THERE

;--------------------------------------------Q#6
q6_:
LEA DX,q6   
MOV AH,9
INT 21H
;------------asking to input answer
mov dx,offset ans	
int 21h
mov ah,1				; if no key pressed, again print time and same question...
int 16h
jz NEXT_TIME				
mov ah,0h				; clear buffer if key pressed
int 16h
;------------check right/wrong answer
mov ah,2
mov dl,al				; printing answer bcz "int 16h" doesn't print input
int 21h
cmp al,'c'
je HERE
jmp THERE

;----------------------------print msg if right option choosed
HERE:
LEA DX,crct   		
MOV AH,9
INT 21H
inc score		; score+=1
jmp QUIZZ		; back to quiz
;-----------------------------print msg if wrong answer choosed
THERE:
LEA DX,incrct   
MOV AH,9
INT 21H
jmp QUIZZ		; back to quiz

;------------------------------result of quiz

ENDQUIZZ:
;--------------to clear screen
mov ah,00		
mov al,02
int 10h
;-----------------print blank lines---------------
	mov cx,6		;printing lines top
	LEA DX,check
	mov AH,9
LS:	int 21h
	loop LS

cmp a1,33h		;if time up, print relevent message
je time_up

mov ah,9		; else...
LEA dx,msg8
int 21h
jmp pscore

time_up:
mov ah,9
mov dx,offset tup
int 21h

pscore:
LEA dx,msg9
int 21h
mov ah,2		; score print
mov dl,score
int 21h
;----------------print time taken to solve quiz
MOV AH,9
LEA DX,total_time
INT 21h 
LEA DX,a5
INT 21h 
LEA DX,a4
INT 21h 
LEA DX,c1
INT 21h 
LEA DX,a3
INT 21h 
LEA DX,a2
INT 21h 
LEA DX,c1
INT 21h
LEA DX,a1
INT 21h 
LEA DX,a
INT 21h 
;-----------------asking for to go back to main screen
ASKK:
mov ah,9
mov dx,offset m2
int 21h
mov ah,1		; input 
int 21h
cmp al,'e'
je INITIAL		; back to main screen
;------------if invalid input
mov ah,9
mov dx,offset wrong
int 21h
jmp ASKK

;---------------------------------------------------------------------3rd option:clock time----------------------------------------------------------------------	
TIME:
;---------------making a second------------------
mov di,1000
PA1:
mov cx,3000
PA2:loop PA2
DEC di
JNZ PA1
	mov ah,00
	mov al,02		; clear screen
	int 10h
	
	mov cx,6		; uper lines print
	mov ah,2
	mov dl,0Ah
LINE:	int 21h			
	loop LINE		
	
	mov ah,9
	mov dx,offset m		;'current clock time:'
	int 21h
	
;----------------now print time
	mov ah,2Ch		; 2Ch gets current system time and stores in format,  H:m:s   respectively in register, CH:CL:DH
	int 21h			; it picks 24-hour time....


;--------------------HOURS---------------------
	mov al,CH		;HOURS
	aam			; adjust ASCII after multiplication,  it divides-> al/10, places Quotient in AH, Remainder in AL
	add ax,3030h		; after division convert to ASCII of numbers to display....
	mov bx,ax
;-----------strarting from mid night 12 o'clock----------------
;-----if 00 pic at mid-night---------------------------
	cmp bx,3030h		; 00 o'clock, mid-night
	JNE continue 
	add bx,0102h		; change to 12
	mov SI,offset[v1]
	JMP print
;--------if 24 pic at mid-night------------------------
	cmp bx,3234h		; 24 o'clock, mid-night
	JNE continue 
	sub bx,0102h		; change to 12 
	mov SI,offset[v1]
	JMP print
;----------12 of noon is picked as it is---------------
	cmp bx,3132h		; exect 12 of noon
	JNE continue
	mov SI,offset[v2]	;pm of noon
	jmp print
;---------after 12 of noon, it picks 13,14,15,.....,19,20,21,22,23,24/00------
continue:
	cmp bh,31h
	JE more
	cmp bh,32h		; mid-night upto 24 hours....
	JE night
	mov SI,offset[v1]	;fully accurate/regular time picked 1,2,3...9 AM
	JMP print

night:	
	mov SI,offset[v2]	; for AM/PM
	cmp bx,3230h		; 8pm cover, 20 picked
	je enPM
	cmp bx,3231h		; 9pm cover, 21 picked
	je enPM			
	sub bx,0102h		; subtracting 12 for 10,11 pm
	jmp print	

enPM:	sub bx,3228h		; 08/09 will result
	add bx,3030h		; 3038 will result
	jmp print

more:	cmp bl,33h		; after noon 12 o'clock
	JGE pml
	mov SI,offset[v1]	; else 10,11,am
	JMP print

pml:	sub bx,0102h		; subtracting from 12 to convert to 1,2,3.., after 12 of noon
	mov SI,offset[v2]	; for AM/PM
	JMP print
;---------------------print hours time--------------------------
print:	mov ah,2
	mov dl,bh
	int 21h
	mov dl,bl
	int 21h

;--------------------------MINUTES:SECONDS-----------------
	mov count,2
	mov al,CL		; for MINUTES
disp:
	aam			; adjust ASCII after multiplication,  it divides-> al/10, places Q in AH, R in AL
	add ax,3030h		; after division convert to ASCII of numbers to display....
	mov bx,ax

	mov ah,2
	mov dl,':'
	int 21h
	mov dl,bh		;00:00
	int 21h
	mov dl,bl
	int 21h

	mov al,DH		; for SECONDS
	dec count
	JNZ disp		;loop back
;-----------------AM/PM--------------
	mov ah,9
	mov dx,si		; offset of that string
	int 21h
;----------------ask to go back
	mov ah,9
	mov dx,offset m2	
	int 21h

	
	mov ah,1h 
	int 16h
	jz TIME			; z=1 if no key entered, then again fetches time from PC and display

	mov ah, 0h		;If key is pressed here the buffer is cleaned
	int 16h
	mov ah,2
	mov dl,al		; print our input bcz "int 16h" doesn't print our input
	int 21h
	cmp al,'e'		; check which key is pressed
	je INITIAL		; go back to front screen

	mov ah,9
	mov dx,offset wrong	; invalid warning msg
	int 21h
	jmp TIME
	
;-------------------------------------------------terminate here-----------------------------------------------------
END_:	mov ah,4ch
	int 21h
main endp
end main
