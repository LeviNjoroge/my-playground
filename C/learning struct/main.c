#include <stdio.h>

int main(){

    int secret_num = 765;
    int guess;
    int trials=1;

    printf("Hi there,\nLet's play a little game here shall we?\nI'm thinking of a number,\nMake a guess of what the number might be!\n\n");


    for(int i=0;i<100;i++){
        printf("Your guess is: ");
        scanf("%d",&guess);
        if (guess>secret_num){
            printf("Go lower!\n");
        }
        else if (guess<secret_num){
            printf("Go higher!\n");
        }
        else{
            printf("You got it!!\nCongrats mate!\n\nThe secret number is %d and it took you %d trials to get it!\n",secret_num,i);
            break;
        }
    }


    return 0;
}
