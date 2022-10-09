package com.thealgorithms.sorts;

import java.util.Random;

public class OddEvenSort {

    public static void main(String[] args) {
        int[] arr = new int[100];

        Random random = new Random();

        // Print out unsorted elements
        for (int i = 0; i < arr.length; ++i) {
            arr[i] = random.nextInt(100) - 50;
            System.out.println(arr[i]);
        }
        System.out.println("--------------");

        oddEvenSort(arr);

        //Print Sorted elements
        for (int i = 0; i < arr.length - 1; ++i) {
            System.out.println(arr[i]);
            assert arr[i] <= arr[i + 1];
        }
    }

     
    public static void oddEvenSort(int[] arr) {
        boolean sorted = false;
        while (!sorted) {
            sorted = true;

            for (int i = 1; i < arr.length - 1; i += 2) {
                if (arr[i] > arr[i + 1]) {
                    swap(arr, i, i + 1);
                    sorted = false;
                }
            }

            for (int i = 0; i < arr.length - 1; i += 2) {
                if (arr[i] > arr[i + 1]) {
                    swap(arr, i, i + 1);
                    sorted = false;
                }
            }
        }
    }

    private static void swap(int[] arr, int i, int j) {
        int temp = arr[i];
        arr[i] = arr[j];
        arr[j] = temp;
    }
}