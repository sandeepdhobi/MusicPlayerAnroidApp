#include<stdio.h>
#include<conio.h>
int nand(int,int);
int nor(int,int);
int or(int,int);
int and(int,int);
int not(int);
void main()
{
int a,b,i,j,NAND,NOR,OR,AND,NOT,y,P;
char ch;
printf("enter 1st input\n");
scanf("\n%d",&a);
printf("enter 2nd input\n");
scanf("\n%d",&b);
NAND=nand(a,b);
NOR=nor(a,b);
OR=or(a,b);
AND=and(a,b);
NOT=not(a);
printf("\nNAND=\n%d",NAND);
printf("\nNOR=\n%d",NOR);
printf("\nAND=\n%d",AND);
printf("\nOR=\n%d",OR);
printf("\nNOT=\n%d",NOT);
y=nand(a,a);
j=nand(y,y);
P=not(or(and(a,b),b))+nand(b,a)*and(b,a);
if(P==0)
printf("\np=%d",P);
else
printf("\np=1");
printf("\ny=%d",y);
printf("\nj=%d",j);
getch();
}
int nand(int a,int b)
{
if(a==1&&b==1)
return(0);
else
return(1);
}
int nor(int a,int b)
{
if(a==0&&b==0)
return(1);
else
return(0);
}
int and(int a,int b)
{
if(a==1&&b==1)
return(1);
else
return(0);
}
int or(int a,int b)
{
if(a==0&&b==0)
return(0);
else
return(1);
}
int not(int a)
{
if(a==1)
return(0);
else
return(1);
}