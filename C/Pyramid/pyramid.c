#include <stdio.h>
int main(){

    int rows;
    char x='*';
    printf("Enter no. of rows: \n");
    scanf("%d",&rows);

    for(int i=rows; i>0; i--){
        printf("%c",x*i);
    }



    return 0;
}
