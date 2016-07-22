def main(first_number, second_number, third_number):
    # Making sure that the inputs make sense
    # in the context of fizzBuzz
    if first_number % second_number != 0 or first_number % third_number != 0:
        raise ValueError("Fizzbuzz doesn't make sense when the first number isn't divisible by the others.")

    # The magic happens here
    for i in range(1, 101):
        if i % first_number == 0:
            print("fizzBuzz")
        elif i % second_number == 0:
            print("buzz")
        elif i % third_number == 0:
            print("fizz")
        else:
            print(i)

if __name__ == '__main__':
    main(14, 5, 3)
