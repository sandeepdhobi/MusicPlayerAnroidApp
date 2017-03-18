#include<stdio.h>
void main()
{
int x,y;
x=21;
y=56;
printf("%d\n",x);
printf("%d\n",y);
//
int temp=x;
x=y;
y=temp;

printf("swapped x %d\n",x);
printf("swapped y %d\n",y);


}