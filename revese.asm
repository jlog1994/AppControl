.model small
.stack 100h
.data
	longitudMaxima EQU 100
	CadenaAInvertir DB LongitudMaxima DUP(?)
	CadenaInvertida DB LongitudMaxima DUP (?)
.code
	INICIO:
		
		mov ax, @data
		mov ds,ax
		mov ah,3fh
		mov bx,0
		
		mov cx,LongitudMaxima
		mov dx,OFFSET CadenaAInvertir
		int 21h
		and ax,ax
		
		jz Salir
		mov cx,ax
		push cx
		mov bx,OFFSET CadenaAInvertir
		mov si,OFFSET CadenaInvertida
		add si,cx
		
		dec si
	LAZO:
		mov al,[bx]
		mov [si],al
		inc bx
		dec si
		loop LAZO
		pop cx
		mov ah,40h
		mov bx,1
		mov dx,OFFSET CadenaInvertida
		int 21h
		
	Salir:
		mov ah,4ch
		int 21h
		END INICIO
		