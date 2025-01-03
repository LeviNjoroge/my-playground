#include <stdio.h>

int main(){
    int rpt;
    do{
        int num, rem=0, mod=0, i;
        printf("--------------- WELCOME ---------------\nLet's test some prime;)\n");
        printf("Enter the number: \n");
        scanf("%d",&num);

        for(i=1;i<=num;i++){
            mod=num%i;
            if(mod==0){
                mod=1;
                rem+=mod;
            }
        }

        if (rem==2){
            printf("%d is a prime number!!\n",num);
        }
        else{
            printf("%d ain't prime. Sorry:(\n",num);}
        printf("Go again?\nIf yes, enter 0:\n");
        scanf("%d",&rpt);
        printf("\n");
    }
    while(rpt==0);
    printf("Hope to see you soon:)\n--------------- Adios ---------------\n");

    return 0;
}
