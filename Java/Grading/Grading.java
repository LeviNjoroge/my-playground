// Write a Java program that determines the student’s grade . the program will read three types of
// scores(quiz, mid-term and final scores) and determine the grade based on the following rules:
// [10 marks]
// if the average score >=90% grade A
// if the average score >= 70% and < 90% grade B
// if average score >=50% and <70% grade C
// if the average score <50% grade F

import java.util.Scanner;

public class Grading{

    public static void main(String[] args){
        Scanner input = new Scanner(System.in);
        
        System.out.println("Enter quiz score: ");
        int quiz = input.nextInt();
        System.out.println("Enter mid-term score: ");
        int mid_term = input.nextInt();
        System.out.println("Enter final score: ");
        int finals = input.nextInt();

        double average_score = (quiz+mid_term+finals)/3;
        String grade = "";
        
        if (average_score >= 90) {
            grade = "A";
        }
        else if (average_score>=70) {
            grade = "B";
        }
        else if (average_score >= 50) {
            grade = "C";
        }
        else{
            grade = "F";
        }
        System.out.println("\nAverage score: "+average_score+"\nGrade: "+grade);
    }

}