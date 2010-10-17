package info.gridworld.actor;
import info.gridworld.actor.Bug;

public class ZBug extends Bug
{
private int steps;
private int sideLength;
private int  level;

public ZBug(int length)
{
steps = 0;
level = 0;
sideLength = length;
turn();turn();
}

public void act()
{
if((!canMove())||(level==3))
	{
return;
	}

else if (steps < sideLength && canMove())
	{
	move();
	steps++;
	}
else 
	{
	 if(level==0)
		 {
		turn();turn();turn();
		}
	else 
		{turn();turn();turn();turn();
		turn();
		}
	level++;
	steps = 0;
	}
}
}

