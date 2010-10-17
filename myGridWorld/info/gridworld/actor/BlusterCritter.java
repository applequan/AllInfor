/* 
 * AP(r) Computer Science GridWorld Case Study:
 * Copyright(c) 2005-2006 Cay S. Horstmann (http://horstmann.com)
 *
 * This code is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation.
 *
 * This code is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * @author Cay Horstmann
 */

package info.gridworld.actor;

import info.gridworld.actor.Actor;
import info.gridworld.actor.Critter;
import info.gridworld.grid.Location;
import java.util.ArrayList;
import java.awt.Color;

/**
* BlusterCritter that extends Critter. A
*BlusterCritter looks at all of the neighbors within two steps of its current
*location. (For a BlusterCritter not near an edge, this includes 24
*locations). It counts the number of critters in those locations. If there are fewer
*than c critters, the BlusterCritter’s color gets brighter (color values
*increase). If there are c or more critters, the BlusterCritter’s color
*darkens (color values decrease). Here, c is a value that indicates the courage of the
*critter. It should be set in the constructor.
*plementation of this class is testable on the AP CS A and AB exams.
*/

public class BlusterCritter extends Critter
{
	private static final double DARKENING_FACTOR = 0.03;
	private int courage;
	
	public BlusterCritter(int c)
	{
		courage = c;
	}
	
	public ArrayList<Actor> getActors()
	{
		ArrayList<Actor> actors = new ArrayList<Actor>();
		for(int i=-2;i<3;i++)
		for(int j=-2;j<3;j++)				
        {
			if (i == 0 && j==0) break;
			Location here = new Location(getLocation().getRow()+i,getLocation().getCol()+j);
			if (!getGrid().isValid(here)) 
				continue;
			if (getGrid().get(here) != null)
				actors.add(getGrid().get(here));
        }
		return actors;
	}
	public void processActors(ArrayList<Actor> actors)
    {
        int n = actors.size();
        if (n > courage)//darker
        {
            Color c = getColor();
            int red = (int) (c.getRed() * (1 - DARKENING_FACTOR));
            int green = (int) (c.getGreen() * (1 - DARKENING_FACTOR));
            int blue = (int) (c.getBlue() * (1 - DARKENING_FACTOR));

            setColor(new Color(red, green, blue));
            return;
        }
        else//brighter
        {
            Color c = getColor();
            int red = (int) (c.getRed() * (1 + DARKENING_FACTOR)+0.7);
            int green = (int) (c.getGreen() * (1 + DARKENING_FACTOR)+0.7);
            int blue = (int) (c.getBlue() * (1 + DARKENING_FACTOR)+0.7);

            setColor(new Color(red>255?255:red, green>255?255:green, blue>255?255:blue));
            return;
        }
    }
}