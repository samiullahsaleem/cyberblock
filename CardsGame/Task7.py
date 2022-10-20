print("Reboot the computer and try to connect")
solve = input("Did that fix the problem? ")
if solve.lower() == "yes":
    pass
else:
    print("Reboot the router and try to connect")
    solve = input("Did that fix the problem? ")
    if solve.lower() == "yes":
        pass
    else:
        print("Make sure the cables between the router and modem are plugged in firmly.")
        solve = input("Did that fix the problem? ")
        if solve.lower() == "yes":
            pass
        else:
            print("Move the router to a new location")
            solve = input("Did that fix the problem? ")
            if solve.lower() == "yes":
                pass
            else:
                print("Get a new router")