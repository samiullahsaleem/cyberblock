[org 0x0100]

mov bx, num1 ; point bx to first number

mov cx, 9 ; load count of numbers in cx

mov ax, 0 ; initialize sum to zero

l1: cmp word [bx],0

jz l2

add ax, [bx] ; add number to ax

l2: add bx, 2 ; advance bx to next number

sub cx, 1 ; numbers to be added reduced

jnz l1

mov [total], ax ; write back sum in memory

mov ax, 0x4c00 ; terminate program

int 0x21

num1: dw 1, 2, 0, 4, 0, 1, 4, 2, 9

total: dw 0