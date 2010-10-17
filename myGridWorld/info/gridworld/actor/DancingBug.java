package info.gridworld.actor;
import info.gridworld.actor.Bug;

public class DancingBug extends Bug
{

private int currp;
private int[] ctime;
public DancingBug(int[] times)
{
ctime=times;
currp = 0;

}

public void act()
{



if (canMove())
	{int ct=ctime[currp%(ctime.length)];
		while ((ct--)!=0)
			turn();
move();
currp++;
	}
else
	{
	turn();

	}
}
}

