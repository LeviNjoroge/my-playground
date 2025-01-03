/*This is a system where students' details are stored.
A student first enters their regno. and the amount they have paid.
The system then checks the registration no. against the database to find the outstanding fee balance and if the regno is not found, an error message is given and program terminated.
Only students with cleared fees are allowed to access the school services and those with debt are shown their debt amount and program terminated.
*/

#include <stdio.h>
int main(){

    //student database, stored with info bout regno. against fee bal
    int stdDtb[2][1000]={{7947,7960,7077},{1000,0,8000}};
char rpt;
do{
    int feebal;
    int regno, amt;
    printf("Enter your registration number: \n");
    scanf("%d",&regno);
    printf("Enter the amount paid: \n");
    scanf("%d",&amt);

    //Match the reg no and find the fee balance from the database
    for(int i=0;i<3;i++){
        if(stdDtb[0][i]==regno){
                feebal=stdDtb[1][i];
                break;
            }
        else if(i==2 && stdDtb[0][i]!=regno){
            printf("You are not a registered student of this school!\nIf this is a mistake, please visit the administration\nThanks!\n");
            return 0;
        }
    }
    //calculate the fee balance
    int bal=feebal-amt;

    for(int i=0;i<3;i++){
        if(stdDtb[0][i]==regno){
                stdDtb[1][i]=bal;
                break;
            }
    }

    if(amt>=feebal){
        int service;
        printf("Select a service:\n1.Report Online.\n2.Register Units.\n3.Download Exam Card.\n");
        scanf("%d",&service);

        switch (service) {
            case 1:
                printf("Success!\nOnline reporting successful\nRegistration Number: %d\nAmount Paid: %d\nFee Balance: %d",regno, amt, bal);
                break;
            case 2:
                printf("Success!\nUnit registration successful\nRegistration Number: %d\nAmount Paid: %d\nFee Balance: %d",regno, amt, bal);
                break;
            case 3:
                printf("Success!\nExam card successfully downloaded\nRegistration Number: %d\nAmount Paid: %d\nFee Balance: %d",regno, amt, bal);
                break;

            default:
                printf("Not a valid choice");
        }
        }else {
            printf("You are not allowed to access university services until you cleared your fees!\nOutstanding balance: %d\n",bal);
        }
printf("\n\nWould you like to access a service?\nIf yes, type Y\n");
scanf(" %c",&rpt);
}
while (rpt=='y' || rpt=='Y');
printf("Have a lovely day;)");
    return 0;
}
